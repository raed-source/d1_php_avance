<?php
// -------------------------instanciation de la class Image
$img = new Image();
$listeImg = $img->getImage(IMAGES_DIR_PATH);
?>
<?php foreach ($listeImg as $img) : ?>
    <li><a href="#"><img src="<?php echo IMAGES_DIR_URL . $img['filename'] ?>" alt="" </a></li>
<?php endforeach ?>