<?php







session_start();



         
   $IDSup = $_POST["IDMODSUPP"];



            $connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","","db648575668");
                if($connect){
                    
                    $req = "delete from cv where ID =  '$IDSup' ";
                    $reqI = "delete from images where img_id =  '$IDSup' ";
                    $resultat = mysqli_query($connect, $req);
                    $resultatI = mysqli_query($connect, $reqI);
                    if ($resultat == true and $resultatI == true)  
                    {
                        $nbre = mysqli_affected_rows($connect);
                        
                        
                        header("Location: choix.php?SuppressionReussite");
                        
                        
                        }
                    
                    
                }
                else echo"connexion échouée";
                
?>

