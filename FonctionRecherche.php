<html>
        <form>
    	<body>
            <header>    
                <a href="choix.php">
                    <img src="assets/img/NerytecLogo.jpg" />
</a>
            </header>
		</form>
</html>

<?php

      




$rechercheOpti=$_POST["RechercheOption"];
$rechercheInput=$_POST["recherche"];
$connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","1403Mj!<3","db648575668");
                if($connect){
                     
                        
                    $req = "SELECT Nom,Numero,Type,Commentaire,Ville,ID,Rappel from cv where $rechercheOpti like '%$rechercheInput%' ";/*'$rechercheOpti' = '$rechercheInput' ";*/
                    
                    $resultat = mysqli_query($connect, $req);
                    
                    
                    if ($resultat == false)  {
                      header("Location: ChercherCV.php?aucunrésultat"); 
                    }
                    else{
                        
                        $i=0;
                        while($ligneR=mysqli_fetch_row($resultat)){
                             
                            echo '<div>';                             
echo ' Nom : <B> ';echo $ligneR[0];echo '</B> | Type de poste : <B>';echo $ligneR[2];echo ' </B> | Ville : <B>';echo $ligneR[4];echo ' </B> | Numéro de téléphone : <B>';echo $ligneR[1];echo '</B> | Commentaire : <B>';echo $ligneR[3];
echo ' </B> | Date du rappel : <B>';echo $ligneR[6];
echo " </B> <a href=\"apercu.php?id=" . $ligneR[5] . "\">" . $ligneR[0] . "</a><br />";


    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
    
    
    $_SESSION['IDAMOD'] = $ligneR[5];
/*
Lié le rappel à la base de donnée en récupérant un variable depuis ligne[X] puis la relancé dans la prochaine page
   */
echo '
    

<form action="FonctionSuppCV.php" method="POST">  
<input type="hidden" name="IDMODSUPP" value="';echo $ligneR[5]; echo'" ></input>
<button class="btn btn-primary" name="suppCV"> Supprimer CV  </button>
        </form>
        </div>
        
<form action="FonctionAddRappel.php" method="POST">
        <div>
<input type="hidden" name="IDMODDate" value="';echo $ligneR[5]; echo'" ></input> 
<input type="date" name="NewRappel" ></input>
<button class="btn btn-primary" name="AddRappel"> Ajouter Rappel</button>

</form>
        </div>

';
echo '</div> </br>';
    
                              
                            
                        }
                        mysqli_close($connect);
                    }
                   
                    
                }
?>
     