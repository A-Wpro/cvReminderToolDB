<?php








       if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
    $IDaddDATE = $_POST["IDMODDate"];
            
            $connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","","db648575668");
                if($connect){
                     
                    $Rappel = $_POST["NewRappel"];
                    
                    $req = "UPDATE cv set Rappel = '$Rappel' where ID = '$IDaddDATE' ";
                    
                    $resultat = mysqli_query($connect, $req);
                    

                    
                    
                  
                    
                    if ($resultat== true)  { 
                        header("Location: FonctionRecherche.php?DateAjoute"); 
                    }
                    else{
                        header("Location: Afficher.php?ErreurDateNonAjouter"); 
                        }
                }
                else echo "connexion échouée";
        
            

?>

