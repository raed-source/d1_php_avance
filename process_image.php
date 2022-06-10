<?php
require('config.php');
require('class/Image.php');
if (!isset($_POST['formImageSubmit'])) {
    echo 'retour';
    $error_msg = 'Aucun information n\'est définie' .
        '<a href="' . WEB_DIR_URL . 'admin.php">Retour</a>';
}
if (isset($_POST['formImageSubmit'])) {
    if ((empty($_POST['title'])) or (empty($_POST['description'])) or (empty($_POST['filename']))) {
        $error_msg = 'un des param est vide! ' . '<a href="' . WEB_DIR_URL . 'admin.php">Retour</a>';
    } else {
        // ------------insertion dans bdd------------------------------
        $title = trim($_POST['title']);
        $description = trim($_POST['description']);
        $filename = trim($_POST['filename']);
        $img = new Image();
        $insertImage = $img->insertImage($title, $description, $filename);
        if (true === $insertImage) {
            header('location:' . WEB_DIR_URL . 'admin.php?insertImage=ok');
        } else {
            $error_msg = '<br><a href="' . WEB_DIR_URL . 'admin.php">retour</a>';
        }
    }
}
if (isset($error_msg)) {
    echo $error_msg;
}
