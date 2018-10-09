<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function hook_5_3_3_4_fixRCEInHtaccess() {
    $nonWritableFiles = [];
    $attachmentsHtaccess = LC_DIR_FILES . 'attachments' . LC_DS . '.htaccess';

    if (\Includes\Utils\FileManager::isFileWriteable($attachmentsHtaccess)) {
        \Includes\Utils\FileManager::deleteFile($attachmentsHtaccess);
        hook_5_3_3_4_createHtaccess($attachmentsHtaccess);
    } elseif (\Includes\Utils\FileManager::isFile($attachmentsHtaccess)) {
        $nonWritableFiles[] = $attachmentsHtaccess;
    }

    $vendorRe = '/vendor\d+\/attachments\/\.htaccess/';
    $vendor = new \Includes\Utils\FileFilter(LC_DIR_FILES, $vendorRe);
    $iterator = $vendor->getIterator();

    foreach ($iterator as $file) {
        $path = $file->getPathname();
        if (\Includes\Utils\FileManager::isFileWriteable($path)) {
            \Includes\Utils\FileManager::deleteFile($path);
            hook_5_3_3_4_createHtaccess($path);
        } else {
            $nonWritableFiles[] = $path;
        }
    }

    if (count($nonWritableFiles) > 0) {
        hook_5_3_3_4_fixPostUpgradeNote($nonWritableFiles);
    }
}

function hook_5_3_3_4_createHtaccess($path) {
    $contents = <<<HTACCESS
Options -Indexes

<Files "*.php">
Deny from all
</Files>

<Files "*.php3">
Deny from all
</Files>

<Files "*.pl">
Deny from all
</Files>

<Files "*.py">
Deny from all
</Files>

Allow from all
HTACCESS;

    file_put_contents(
        $path,
        $contents
    );
}

function hook_5_3_3_4_fixPostUpgradeNote($files) {
    if ($files) {
        $fileList = implode(PHP_EOL, $files);
        $noteEn = __DIR__ . LC_DS . 'post_upgrade.txt';

        if (\Includes\Utils\FileManager::isFileWriteable($noteEn)) {
            $search = 'Existing .htaccess content in the aforementioned files is replaced by this code:';
            $replacement = <<<TEXT
The upgrade script could not replace the following files due to insufficient permissions:
{$fileList}
Existing .htaccess content in the aforementioned files should be replaced manually by this code:
TEXT;

            $file_contents = file_get_contents($noteEn);
            $file_contents = str_replace($search, $replacement, $file_contents);
            file_put_contents($noteEn, $file_contents);
        }

        $noteRu = __DIR__ . LC_DS .  'post_upgrade.ru.txt';

        if (\Includes\Utils\FileManager::isFileWriteable($noteRu)) {
            $search = 'Существующий код .htaccess был заменен следующим кодом:';
            $replacement = <<<TEXT
На данном сервере недостаточно прав для изменения нижеперечисленных файлов:
{$fileList}
Существующий код .htaccess должен быть заменен вручную следующим кодом:
TEXT;

            $file_contents = file_get_contents($noteRu);
            $file_contents = str_replace($search, $replacement, $file_contents);
            file_put_contents($noteRu, $file_contents);
        }
    }
}

return function () {
    // Loading data to the database from yaml file
    $yamlFile = __DIR__ . LC_DS . 'post_rebuild.yaml';

    if (\Includes\Utils\FileManager::isFileReadable($yamlFile)) {
        \XLite\Core\Database::getInstance()->loadFixturesFromYaml($yamlFile);
    }

    hook_5_3_3_4_fixRCEInHtaccess();

    \XLite\Core\Database::getEM()->flush();
};

