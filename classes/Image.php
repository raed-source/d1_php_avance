<?php
class Image
{
    public function __construct()
    {
    }
    function getImage($imageDire)
    {
        // $handle = true;
        if ($handle == opendir($imageDire)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != '.' && $entry != '..') {

                    $imagesListe[] = $entry;
                }
            }
        }
        closedir($handle);
        return $imagesListe;
    }
}
