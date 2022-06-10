<?php
require('config.php');
require('class/Image.php');

$img = new Image();
$imgs = $img->getImage(IMAGES_DIR_PATH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Admin</title>
</head>

<body>
    <h1><?php echo WEB_TITLE ?></h1>
    <ul>
        <?php foreach ($imgs as $img) : ?>
            <li>
                <img src="<?php echo IMAGES_DIR_URL . $img['filename'] ?>" alt="">
                <form action="process_image.php" method="POST">
                    <p>Titre : <input type="text" name="title" value="<?php echo $img['title'] ?>"> </p>
                    <input type="hidden" name="filename" value="<?php echo $img['filename'] ?>">
                    <p>Description : <textarea name="description" id="" cols="30" rows="10"><?php echo $img['description'] ?></textarea></p>
                    <p><input type="submit" name="formImageSubmit" value="validez"></p>
                </form>
            </li>
        <?php endforeach ?>
    </ul>

</body>

</html>