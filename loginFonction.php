<?php






    if(isset($_POST["submit"])){
            $id = $_POST["Identifiant"];
            $mdp = $_POST["Mot_De_Passe"];
            $connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","","db648575668");
                if($connect){
                     
                        $req = "SELECT Mot_De_Passe,Identifiant FROM login WHERE Identifiant = '$id'  ";
                        $resultat = mysqli_query($connect, $req);
                        
                        if ($resultat == false){ // si erreur dans recherche
                                header("Location: index.php?erreurRecherche");
                            }
                            
                        else{
                            
                            if(mysqli_num_rows($resultat) == 0) { // si pas de resultats
                                header("Location: index.php?erreurResultat");
                            }
                            else{
                                $tab = mysqli_fetch_row($resultat);
                                if ($tab[0] == $mdp){
                                    
                                    header("Location: choix.php");
                                }
                                else header("Location: index.php?erreurMotDePasse");
                            }
                        }
                    
                }
    }
?>


