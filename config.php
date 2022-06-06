<?php
define('WEB_TITLE', 'ImagesProjet');
define('WEB_DIR_NAME', 'images_projet');
define('IMAGES_DIR_NAME', 'images');
define('IMAGES_DIR_PATH', $_SERVER['DOCUMENT_ROOT'] . '/' . WEB_DIR_NAME . '/' . IMAGES_DIR_NAME . '/');
define('IMAGES_DIR_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/' . WEB_DIR_NAME . '/' . IMAGES_DIR_NAME . '/');
echo ' web dir name' . '<br>';
echo WEB_DIR_NAME . '<br>';
echo ' images dir name' . '<br>';
echo IMAGES_DIR_NAME . '<br>';
echo 'the images dir path' . '<br>';
var_dump(IMAGES_DIR_PATH);
echo 'the images dir url';
var_dump(IMAGES_DIR_URL);
