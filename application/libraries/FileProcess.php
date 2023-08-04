<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FileProcess
 *
 * @author amen
 */
class FileProcess {

    private $picture_url = "";
    //put your code here
    function __construct() {
        
    }

    public function process($picture_path) {
//        print_r(dirname(dirname(__DIR__)));
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['picture']) AND $_FILES['picture']['error'] == 0) {
            // Testons si le fichier n'est pas trop gros
            if ($_FILES['picture']['size'] <= 3145728) {
                // Testons si l'extension est autorisée
                $filename = pathinfo($_FILES['picture']['name']);
                $upload_ext = $filename['extension'];
                $accept_ext = array('jpg', 'jpeg', 'png');
                if (in_array($upload_ext, $accept_ext)) {
                    $this->setPicture_url($picture_path . basename($_FILES['picture']['name']));
                    // On peut valider le fichier et le stocker définitivement
                    move_uploaded_file($_FILES['picture']['tmp_name'], $this->getPicture_url());
//                    echo "L'envoi a bien été effectué !";
                } else {
                    echo 'extention non-autorisee';
                }
            } else {
                echo 'image trop grosse';
            }
        } elseif (isset($_FILES['img[]']) AND $_FILES['img[]']['error'] == UPLOAD_ERR_NO_FILE) {
            echo 'fichier inexistant';
        } elseif (isset($_FILES['img[]']) AND $_FILES['img[]']['error'] == UPLOAD_ERR_PARTIAL) {
            echo 'fichier uploadé que partiellement';
        } elseif (isset($_FILES['img[]']) AND $_FILES['img[]']['error'] == UPLOAD_ERR_INI_SIZE) {
            echo 'fichier trop gros';
        } elseif (isset($_FILES['img[]']) AND $_FILES['img[]']['error'] == UPLOAD_ERR_FORM_SIZE) {
            echo 'fichier trop gros';
        } elseif (!isset($_FILES['img[]'])) {
            echo 'pas de variable';
        } else {
            echo 'probleme a l\'envoi';
        }
    }
    function getPicture_url() {
        return $this->picture_url;
    }

    function setPicture_url($picture_url) {
        $this->picture_url = $picture_url;
    }

 

}
