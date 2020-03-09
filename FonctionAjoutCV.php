<?php








            
            $connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","1403Mj!<3","db648575668");
                if($connect){
                     
                    /* Mis en BDD des cv
                     */    
                    $req = "INSERT INTO cv(Nom,Numero,Type,Rappel,Commentaire,Ville)values(?,?,?,?,?,?)";
                    $resultat = mysqli_prepare($connect, $req);
                    $var=mysqli_stmt_bind_param($resultat,'sissss',$Nom,$Numero,$Type,$Rappel,$Commentaire,$Ville);
                    $Nom = $_POST["Nom"];
                    $Ville = $_POST["Ville"];
                    $Numero = $_POST["Tel"];
                    $Type = $_POST["poste"];
                    $Rappel = $_POST["date"];
                    $Commentaire = $_POST["Commentaire"];
                  
                    $var=mysqli_stmt_execute($resultat);
                    if ($var== false)  { 
                        header("Location: Ajouter.php?erreur"); 
                    }
                    
                    /*
                    else{
                                  header("Location: AjoutImage.php");

                        }*/
                        }
                
                else echo "connexion échouée";
        
                
                session_start();
/*session is started if you don't write this line can't use $_Session  global variable*/

             
                 /*      recherche id*/
                  
                              $req1 = "SELECT ID from cv where Nom = '$Nom' ";
                    
                    $resultat1 = mysqli_query($connect, $req1);
                    
                    
                    if ($resultat1== false)  {
                      header("Location: Afficher.php?erreur1"); 
                    }
                    else{
                        
                       
                       
                               $idp=mysqli_fetch_row($resultat1);
                               
							$_SESSION["ID1"]=$idp[0];
                      		$id=$idp[0];

                            header("Location: AjoutImage.php?idImage=$id");

                    }
                        

?>

