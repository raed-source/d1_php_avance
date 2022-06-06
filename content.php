<?php
// require('classes/Image.php');
// require('config.php');
$Image = new Image();
$Images = $Image->getImage(IMAGES_DIR_PATH);
?>
<ul>
    <?php foreach ($images as $image) : ?>
        <li><img src="<?php echo IMAGES_DIR_URL . $image ?>" alt=""></li>
    <?php endforeach ?>
</ul>