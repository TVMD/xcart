<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\ImageOperator\Engine;

use XLite\Core\ImageOperator\ADTO;

/**
 * ImageMagic engine
 */
class ImageMagick extends \XLite\Core\ImageOperator\AEngine
{
    /**
     * @var string
     */
    protected static $imageMagickExecutable;

    /**
     * @var string
     */
    protected $resource;

    /**
     * Check - enabled engine or not
     *
     * @return boolean
     */
    public static function isEnabled()
    {
        return parent::isEnabled()
            && (bool) static::getImageMagickExecutable();
    }

    /**
     * Return Image Magick executable
     *
     * @return string
     */
    public static function getImageMagickExecutable()
    {
        if (self::$imageMagickExecutable === null) {
            $imageMagickPath = \Includes\Utils\ConfigParser::getOptions(['images', 'image_magick_path']);

            if ($imageMagickPath) {
                self::$imageMagickExecutable = \Includes\Utils\FileManager::findExecutable($imageMagickPath . 'convert')
                    ?: \Includes\Utils\FileManager::findExecutable($imageMagickPath . 'magick'); // IM v7+
            }
        }

        return self::$imageMagickExecutable;
    }

    public function __construct()
    {
        parent::__construct();

        $this->options['image_magick_path']
            = \Includes\Utils\ConfigParser::getOptions(['images', 'image_magick_path']);
    }

    /**
     * Resize procedure
     *
     * @param integer $width  Width
     * @param integer $height Height
     *
     * @return boolean
     */
    public function resize($width, $height)
    {
        $result = false;

        $newResource = tempnam(LC_DIR_TMP, 'image.new');
        if ($this->execFilmStripLook($newResource) === 0
            && $this->execResize($newResource, $width, $height) === 0
        ) {
            copy($newResource, $this->resource);
            $this->updateImageFromResource();

            $result = true;
        }

        unlink($newResource);

        return $result;
    }

    public function rotate($degree)
    {
        $result = false;

        $newResource = tempnam(LC_DIR_TMP, 'image.new');
        if (
            $this->execFilmStripLook($newResource) === 0
            && $this->execRotate($newResource, $degree) === 0
        ) {
            copy($newResource, $this->resource);
            $this->updateImageFromResource();

            $result = true;
        }

        unlink($newResource);

        return $result;
    }

    public function mirror($horizontal = true)
    {
        $result = false;

        $newResource = tempnam(LC_DIR_TMP, 'image.new');
        if (
            $this->execFilmStripLook($newResource) === 0
            && $this->execMirror($newResource, $horizontal) === 0
        ) {
            copy($newResource, $this->resource);
            $this->updateImageFromResource();

            $result = true;
        }

        unlink($newResource);

        return $result;
    }

    /**
     * Execution of preparing film strip look
     *
     * @param string $newResource File path to new image
     *
     * @return integer
     */
    protected function execFilmStripLook($newResource)
    {
        exec(
            '"' . static::getImageMagickExecutable()
            . '" ' . $this->resource . ' -coalesce '
            . $newResource,
            $output,
            $result
        );

        return $result;
    }

    /**
     * Execution of resizing
     *
     * @param string  $newImage File path to new image
     * @param integer $width    Width
     * @param integer $height   Height
     *
     * @return integer
     */
    protected function execResize($newImage, $width, $height)
    {
        $quality = $this->options['resize_quality'];

        exec(
            '"' . static::getImageMagickExecutable() . '" '
            . $newImage
            . ' -resize '
            . $width . 'x' . $height
            . " -quality {$quality} "
            . $newImage,
            $output,
            $result
        );

        if (\XLite\Core\ConfigParser::getOptions(['images', 'make_progressive'])) {
            exec(
                '"' . static::getImageMagickExecutable() . '" '
                . " -strip -interlace Plane -quality 100 $newImage $newImage"
            );
        }

        return $result;
    }

    /**
     * Execution of rotating
     *
     * @param string  $newImage File path to new image
     * @param float $degree
     *
     * @return integer
     */
    protected function execRotate($newImage, $degree)
    {
        $quality = 100;

        exec(
            '"' . static::getImageMagickExecutable() . '" '
            . $newImage
            . ' -rotate '
            . "-\"{$degree}\""
            . " -quality {$quality} "
            . $newImage,
            $output,
            $result
        );

        return $result;
    }

    /**
     * Execution of flipfloping
     *
     * @param string  $newImage File path to new image
     * @param boolean $horizontal
     *
     * @return integer
     */
    protected function execMirror($newImage, $horizontal)
    {
        exec(
            '"' . static::getImageMagickExecutable() . '" '
            . $newImage
            . ($horizontal ? ' -flop ' : ' -flip ')
            . $newImage,
            $output,
            $result
        );

        return $result;
    }

    protected function updateImageFromResource()
    {
        $image = $this->getImage();
        $resource = $this->resource;

        if ($resource) {
            $image->setBody(file_get_contents($resource));
            $imageSize = @getimagesize($resource);

            if ($imageSize) {
                $image->setWidth($imageSize[0]);
                $image->setHeight($imageSize[1]);
            }
        }
    }

    /**
     * Set image
     *
     * @param ADTO $image Image
     */
    public function setImage($image)
    {
        parent::setImage($image);

        if ($this->resource) {
            unlink($this->resource);
        }
        $this->resource = tempnam(LC_DIR_TMP, 'image');
        file_put_contents($this->resource, $image->getBody());
    }

    public function __destruct()
    {
        if ($this->resource) {
            unlink($this->resource);
        }
    }
}
