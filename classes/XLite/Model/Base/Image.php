<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Model\Base;

use XLite\Core\ImageOperator;

/**
 * Image abstract store
 *
 * @MappedSuperclass
 * @HasLifecycleCallbacks
 */
abstract class Image extends \XLite\Model\Base\Storage
{
    const RETINA_RATIO = 2;

    /**
     * MIME type to extension translation table
     *
     * @var array
     */
    protected static $types = [
        'image/jpeg'          => 'jpeg',
        'image/jpg'           => 'jpg',
        'image/gif'           => 'gif',
        'image/xpm'           => 'xpm',
        'image/gd'            => 'gd',
        'image/gd2'           => 'gd2',
        'image/wbmp'          => 'bmp',
        'image/bmp'           => 'bmp',
        'image/x-ms-bmp'      => 'bmp',
        'image/x-windows-bmp' => 'bmp',
        'image/png'           => 'png',
    ];

    /**
     * Width
     *
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $width = 0;

    /**
     * Height
     *
     * @var integer
     *
     * @Column (type="integer")
     */
    protected $height = 0;

    /**
     * Image hash
     *
     * @var string
     *
     * @Column (type="string", options={ "fixed": true }, length=32, nullable=true)
     */
    protected $hash;

    /**
     * Is image need process or not
     *
     * @var boolean
     *
     * @Column (type="boolean")
     */
    protected $needProcess = true;

    /**
     * @var bool
     */
    protected $includeFilenameInHash = true;

    /**
     * Check file is image or not
     *
     * @return boolean
     */
    public function isImage()
    {
        return true;
    }

    /**
     * Get image URL for customer front-end
     *
     * @return string
     */
    public function getFrontURL()
    {
        return (!$this->getRepository()->isCheckImage() || $this->checkImageHash()) ? parent::getFrontURL() : null;
    }

    /**
     * Check - image hash is equal data from DB or not
     *
     * @return boolean
     */
    public function checkImageHash()
    {
        $result = true;

        if ($this->getHash()) {
            list($path, $isTempFile) = $this->getLocalPath();

            $hash = \Includes\Utils\FileManager::getHash($path, false, $this->includeFilenameInHash);

            if ($isTempFile) {
                \Includes\Utils\FileManager::deleteFile($path);
            }

            $result = $this->getHash() === $hash;
        }

        return $result;
    }

    public function getActualFileName()
    {
        if (!$this->isURL()) {
            return $this->getPath();
        }

        return preg_replace('/\.[^\.]*?$/', '.' . $this->getExtension(), $this->getFileName());
    }

    /**
     * Check - image is exists in DB or not
     * TODO - remove - old method
     *
     * @return boolean
     */
    public function isExists()
    {
        return !is_null($this->getId());
    }

    /**
     * Clone
     *
     * @return \XLite\Model\AEntity
     */
    public function cloneEntity()
    {
        $newEntity = parent::cloneEntity();

        $newEntity->setPath('');

        if (static::STORAGE_URL == $this->getStorageType()) {
            $newEntity->loadFromURL($this->getURL(), true);

        } else {
            // Clone local image (will be created new file with unique name)
            $newEntity->loadFromLocalFile($this->getStoragePath(), null, true);
        }

        return $newEntity;
    }

    /**
     * Update file path - change file extension taken from MIME information.
     *
     * @return boolean
     */
    protected function updatePathByMIME()
    {
        $result = parent::updatePathByMIME();

        if ($result && !$this->isURL()) {
            list($path,) = $this->getLocalPath();

            $newExtension = $this->getExtensionByMIME();
            $pathinfo = pathinfo($path);

            $extension = isset($pathinfo['extension']) ? $pathinfo['extension'] : '';

            // HARDCODE for BUG-2520
            if (strtolower($extension) === 'jpg' && $newExtension === 'jpeg') {
                $newExtension = 'jpg';
            }

            if ($newExtension !== $extension) {
                $newPath = \Includes\Utils\FileManager::getUniquePath(
                    $pathinfo['dirname'],
                    $pathinfo['filename'] . '.' . $newExtension
                );

                $result = rename($path, $newPath);

                if ($result) {
                    $this->path = basename($newPath);
                }
            }
        }

        return $result;
    }

    /**
     * Renew properties by path
     *
     * @param string $path Path
     *
     * @return boolean
     */
    protected function renewByPath($path)
    {
        $result = parent::renewByPath($path);

        if ($result) {
            $data = @getimagesize($path);

            if (is_array($data)) {
                $this->setWidth($data[0]);
                $this->setHeight($data[1]);
                $this->setMime($data['mime']);
                $hash = \Includes\Utils\FileManager::getHash($path, false, $this->includeFilenameInHash);
                if ($hash) {
                    $this->setHash($hash);
                }

            } else {
                $result = false;
            }
        }

        return $result;
    }

    /**
     * Load from local file
     *
     * @param string  $path       Absolute path
     * @param string  $basename   File name OPTIONAL
     * @param boolean $makeUnique True - create unique named file
     *
     * @return boolean
     */
    public function loadFromLocalFile($path, $basename = null, $makeUnique = false)
    {
        $hash = \Includes\Utils\FileManager::getHash($path, false, $this->includeFilenameInHash);

        if ($hash) {
            /** @var static $existing */
            $existing = $this->getRepository()->findOneByHash($hash);
            if ($existing && $existing->isFileExists()) {
                $path = $existing->getStoragePath();
                $basename = null;
            }
        }

        return parent::loadFromLocalFile($path, $basename, $makeUnique);
    }

    // {{{ Resized icons

    /**
     * Get resized image URL
     *
     * @param integer $width  Width limit OPTIONAL
     * @param integer $height Height limit OPTIONAL
     *
     * @return array (new width, new height, URL)
     */
    public function getResizedURL($width = null, $height = null)
    {
        if ($this->isUseDynamicImageResizing()) {
            $result = $this->doResize($width, $height, false);

        } else {
            list($newWidth, $newHeight) = ImageOperator::getCroppedDimensions(
                $this->getWidth(),
                $this->getHeight(),
                $width,
                $height
            );

            if ($this->isURL()) {
                $url = $retinaURL = $this->getURL();

            } else {
                $name = $this->getPath();

                $size = ($width ?: 'x') . '.' . ($height ?: 'x');
                $path = $retinaPath = $this->getResizedPath($size, $name);

                $url = $retinaURL = $this->isResizedIconAvailable($path)
                    ? $this->getResizedPublicURL($size, $name)
                    : $this->getURL();


                if (
                    ($width * static::RETINA_RATIO) <= $this->getWidth()
                    && ($height * static::RETINA_RATIO) <= $this->getHeight()
                ) {
                    $retinaSize = ($width * static::RETINA_RATIO ?: 'x') . '.' . ($height * static::RETINA_RATIO ?: 'x');
                    $retinaPath = $this->getResizedPath($retinaSize, $name);

                    $retinaURL = $this->isResizedIconAvailable($retinaPath)
                        ? $this->getResizedPublicURL($retinaSize, $name)
                        : $url;
                }
            }

            $result = [$newWidth, $newHeight, $url, $retinaURL];
        }


        return $result;
    }

    /**
     * Resize images
     *
     * @param boolean $doRewrite
     */
    public function prepareSizes($doRewrite = false)
    {
        $this->doResizeAll($this->getAllSizes(), $doRewrite);
    }

    /**
     * Get all defined sizes
     *
     * @return array
     */
    protected function getAllSizes()
    {
        return \XLite\Logic\ImageResize\Generator::getModelImageSizes(
            get_class($this)
        );
    }

    /**
     * Do resize
     *
     * @param array   $sizes     Sizes
     * @param boolean $doRewrite Rewrite flag OPTIONAL
     *
     * @return array
     */
    public function doResizeAll($sizes, $doRewrite = false)
    {
        $result = [];

        foreach ($sizes as $size) {
            list($width, $height) = $size;

            $result[] = $this->doResize($width, $height, $doRewrite);
        }

        return $result;
    }

    /**
     * Resize image by constraints
     *
     * @param integer $width     Width limit OPTIONAL
     * @param integer $height    Height limit OPTIONAL
     * @param boolean $doRewrite Force rewrite OPTIONAL
     *
     * @return array of [actualWidth, actualHeight, resizedPath, retinaResizedPath]
     */
    public function doResize($width = null, $height = null, $doRewrite = false)
    {
        list($newWidth, $newHeight) = $this->getCropDimensions($width, $height);
        $resizedPath = $retinaResizedPath = $this->resizeImage($width, $height, $doRewrite) ?: $this->getURL();

        if (\XLite\Core\ConfigParser::getOptions(['images', 'generate_retina_images'])
            && ($width * static::RETINA_RATIO) <= $this->getWidth()
            && ($height * static::RETINA_RATIO) <= $this->getHeight()
        ) {

            $retinaResizedPath = $this->resizeImage(
                $width * static::RETINA_RATIO,
                $height * static::RETINA_RATIO,
                $doRewrite
            ) ?: $resizedPath;
        }

        return [$newWidth, $newHeight, $resizedPath, $retinaResizedPath];
    }

    /**
     * Perform the actual resizing and return resized path
     *
     * @param integer $width     Width limit OPTIONAL
     * @param integer $height    Height limit OPTIONAL
     * @param boolean $doRewrite Force rewrite OPTIONAL
     *
     * @return string|null Resized path or null if resizing cannot be performed
     */
    protected function resizeImage($width = null, $height = null, $doRewrite = false)
    {
        if ($this->isURL()) {
            return null;
        }

        list($newWidth, $newHeight) = $this->getCropDimensions($width, $height);

        $name = $this->getPath();
        $size = ($width ?: 'x') . '.' . ($height ?: 'x');
        $path = $this->getResizedPath($size, $name);
        $url = $this->getResizedPublicURL($size, $name);

        if (!$this->isResizedIconAvailable($path) || $doRewrite) {
            $result = $this->resizeIcon($newWidth, $newHeight, $path);

            if (!$result) {
                $url = null;
            }
        }

        return $url;
    }

    /**
     * Returns crop dimensions by width and height limit (preserving aspect ratio)
     *
     * @param integer $width  Width limit OPTIONAL
     * @param integer $height Height limit OPTIONAL
     *
     * @return array [newWidth, newHeight]
     */
    protected function getCropDimensions($width, $height)
    {
        return ImageOperator::getCroppedDimensions(
            $this->getWidth(),
            $this->getHeight(),
            $width,
            $height
        );
    }

    /**
     * Get resized file system path
     *
     * @param string $size Size prefix
     * @param string $name File name
     *
     * @return string
     */
    public function getResizedPath($size, $name)
    {
        return $this->getRepository()->getFileSystemCacheRoot($size) . $name;
    }

    /**
     * Get resized file public URL
     *
     * @param string $size Size prefix
     * @param string $name File name
     *
     * @return string
     */
    protected function getResizedPublicURL($size, $name)
    {
        $name = implode(LC_DS, array_map('rawurlencode', explode(LC_DS, $name)));

        return \XLite::getInstance()->getShopURL(
            $this->getRepository()->getWebCacheRoot($size) . '/' . $name,
            \XLite\Core\Request::getInstance()->isHTTPS()
        );
    }

    /**
     * Check - resized icon is available or not
     *
     * @param string $path Resized image path
     *
     * @return boolean
     */
    protected function isResizedIconAvailable($path)
    {
        return \Includes\Utils\FileManager::isFile($path) && $this->getDate() <= filemtime($path);
    }

    /**
     * Resize icon
     *
     * @param integer $width  Destination width
     * @param integer $height Destination height
     * @param string  $path   Write path
     *
     * @return array
     */
    protected function resizeIcon($width, $height, $path)
    {
        $operator = new ImageOperator($this);
        list($newWidth, $newHeight, $result) = $operator->resize($width, $height);

        return false !== $result && \Includes\Utils\FileManager::write($path, $operator->getImage()->getBody())
            ? [$newWidth, $newHeight]
            : null;
    }

    /**
     * Resize on view
     *
     * @return boolean
     */
    protected function isUseDynamicImageResizing()
    {
        return \Xlite\Core\Config::getInstance()->Performance->use_dynamic_image_resizing;
    }

    // }}}

    /**
     * Remove file
     *
     * @param string $path Path OPTIONAL
     *
     * @return void
     */
    public function removeFile($path = null)
    {
        parent::removeFile($path);

        $this->removeResizedImages($path);
    }

    /**
     * Postprocess file by temporary file
     *
     * @param \XLite\Model\TemporaryFile $temporaryFile
     */
    public function postprocessByTemporary(\XLite\Model\TemporaryFile $temporaryFile)
    {
    }

    /**
     * Prepare image before remove operation
     *
     * @param string $path Path OPTIONAL
     */
    public function removeResizedImages($path = null)
    {
        if ($this->isURL()) {
            return;
        }

        $name = $path ?: $this->getPath();
        if ($name === null) {
            return;
        }

        $sizes = $this->getAllSizes();
        foreach ($sizes as $size) {
            list($width, $height) = $size;

            $size = ($width ?: 'x') . '.' . ($height ?: 'x');
            $path = $this->getResizedPath($size, $name);

            if (\Includes\Utils\FileManager::isExists($path)) {
                $isDeleted = \Includes\Utils\FileManager::deleteFile($path);

                if (!$isDeleted) {
                    \XLite\Logger::getInstance()->log('Can\'t delete resized image ' . $path, LOG_DEBUG);
                }
            }
        }
    }

    /**
     * Set width
     *
     * @param integer $width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Get width
     *
     * @return integer
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set hash
     *
     * @param string $hash
     *
     * @return $this
     */
    public function setHash($hash)
    {
        $this->hash = $hash;
        return $this;
    }

    /**
     * Get hash
     *
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Set needProcess
     *
     * @param boolean $needProcess
     *
     * @return $this
     */
    public function setNeedProcess($needProcess)
    {
        $this->needProcess = $needProcess;
        return $this;
    }

    /**
     * Get needProcess
     *
     * @return boolean
     */
    public function getNeedProcess()
    {
        return $this->needProcess;
    }

    /**
     * Return base64 image data
     *
     * @param int|null $width
     * @param int|null $height
     *
     * @return string
     */
    public function getBlurredImageData($width = null, $height = null)
    {
        if (
            ImageOperator::getEngineType() === ImageOperator::ENGINE_SIMPLE
            || !\XLite\Core\Layout::getInstance()->isLazyLoadEnabled()
            || !\XLite\Core\Layout::getInstance()->isSkinAllowsPreloadedImages()
        ) {
            return null;
        }

        list($_w, $_h, $url, $_retinaUrl) = $this->doResize(
            $width ?: $this->getBlurredImageDimensions()['w'],
            $height ?: $this->getBlurredImageDimensions()['h']
        );

        if (static::isValueLocalURL($url)) {
            $path = static::getLocalPathFromURL($url);   
        } else {
            $path = $url;
        }

        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        return $base64;
    }

    /**
     * @return array
     */
    protected function getBlurredImageDimensions()
    {
        return [
            'w' => 10,
            'h' => 10,
        ];
    }
}
