<?php
class Image
{
    public function __construct()
    {
    }
    public function getImage($dir)
    {
        // iterator
        $i = 0;
        if (is_dir($dir)) {
            if ($handle = opendir($dir)) {
                while (($entry = readdir($handle)) !== false) {
                    if ($entry !== '.' && $entry !== '..')
                        $i++;
                    $listeImage[$i]['filename'] = $entry;

                    $image_data = $this->getImageData($entry);
                    $listeImage[$i]['title'] = $image_data['title'];
                    $listeImage[$i]['description'] = $image_data['description'];
                }
            }
        }
        closedir($handle);
        return $listeImage;
    }

    // -------------------------fonction d insertion----------------------

    public function insertImage($title, $description, $filename)
    {
        $mysqli = new mysqli('localhost', 'root', '', 'projet_image');
        $mysqli->set_charset("utf8");
        if ($mysqli->connect_errno) {
            echo 'echec de connexion' . $mysqli->connect_error;
            exit();
        }
        if (!$mysqli->query('INSERT INTO image (title,description,filename)VALUES ("' . $title . '","' . $description . '","' . $filename . '")')) {
            echo 'un erreur est sur venu, l\'insertion interropue: ' . $mysqli->error;
            return false;
        } else {
            return true;
        }
        $mysqli->close();
    }
    // ---------------------------les données d'une image----------------------
    public function getImageData($filename)
    {
        $mysqli = new mysqli('localhost', 'root', '', 'projet_image');
        $mysqli->set_charset("utf8");
        if ($mysqli->connect_errno) {
            printf("Echec de la connexion s%\n,$mysqli->connect_error");
            exit();
        }
        $res = $mysqli->query('SELECT * FROM image where filename = "' . $filename . '"');
        if (!$res) {
            echo 'Erreur de reccuperation de données de la base ' . $mysqli->error;
            return false;
        } else {
            $row = $res->fetch_array();
            $image_data['id'] = $row['id'];
            $image_data['title'] = $row['title'];
            $image_data['description'] = $row['description'];
            $image_data['filename'] = $row['filename'];
            return $image_data;
        }
        $mysqli->close();
    }
}
