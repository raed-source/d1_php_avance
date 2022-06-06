<?php
require('config.php');
require('classes/Image.php');
$image = new Image();
$images = $image->getImage(IMAGES_DIR_PATH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo WEB_TITLE . '-constant' ?></h1>
    <ul>
        <?php foreach ($images as $image) : ?>
            <li><img src="<?php echo IMAGES_DIR_URL . $image ?>" alt="">
                <form action="process_image.php" method="POST">
                    <p>Titre: <input type="text" name="title"></p>
                    <input type="hidden" name="file_name" value="<?php echo $image ?>">
                    <p>Description:<br> <textarea name="desc" cols="50" rows="5"></textarea></p>
                    <p><input type="submit" name="submitImageForm" value="validez"></p>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
<h1><?php echo WEB_TITLE ?></h1>