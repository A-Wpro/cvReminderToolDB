<?php



    function transfert($IDI){
                
        $ret        = false;
        $img_blob   = '';
        $img_taille = 0;
        $img_type   = '';
        $img_nom    = '';
        $taille_max = 2500000;
        $ret        = is_uploaded_file($_FILES['fic']['tmp_name']);
        $img_id     = $IDI;
        
        if (!$ret) {
            echo "Problème de transfert";
            return false;
        } else {
           
            $img_taille = $_FILES['fic']['size'];
            
            if ($img_taille > $taille_max) {
                echo "Trop gros !";
                return false;
            }

            $img_type = $_FILES['fic']['type'];
            $img_nom  = $_FILES['fic']['name'];
        include ("connexion.php");
        $img_blob = file_get_contents ($_FILES['fic']['tmp_name']);
        $req = "INSERT INTO images (" .
                            "img_nom, img_taille, img_type, img_id,img_blob " .
                            ") VALUES (" .
                            "'" . $img_nom . "', " .
                            "'" . $img_taille . "', " .
                            "'" . $img_type . "', " .
                            "'" . $img_id . "', " .
                                "'" . addslashes ($img_blob) . "') ";
        $ret = mysqli_query ($cnx,$req) or die (mysqli_error ($cnx));
         
        header("Location: Ajouter.php"); 
          
        return true;        
        }
    }
?>