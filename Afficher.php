<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Afficher</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Comment.css">
    <link rel="stylesheet" href="assets/css/Custom-File-Upload.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Lista-Productos-Canito.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_carousel-product-cart-slider.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_product-display.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <form>
    	<body>
            <header>    
                <a href="choix.php">
                    <img src="assets/img/NerytecLogo.jpg" />
</a>
            </header>
		</form>
        <?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }
        
     $today = date('Y-m-j');    
     
        date_default_timezone_set('UTC');

        
$connect = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","1403Mj!<3","db648575668");
                if($connect){
                     
                        
                    $req = "SELECT Nom,Numero,Type,Commentaire,Ville,ID,Rappel from cv where Rappel < '$today' ";
                    
                    $resultat = mysqli_query($connect, $req);
                    
                    
                    if ($resultat== false)  {
                      header("Location: Afficher.php?erreur"); 
                    }
                    else{
                        
                        $i=0;
                        while($ligne=mysqli_fetch_row($resultat)){
                             
                            echo '<div>';                             
echo ' Nom : <B>';echo $ligne[0];echo '</B> Type de poste : <B>';echo $ligne[2];echo ' </B>Ville : <B>';echo $ligne[4];echo ' </B> Numéro de téléphone : <B>';echo $ligne[1];echo '</B> Commentaire : <B> ';echo $ligne[3];
echo ' </B> | Date du rappel : <B>';echo $ligne[6];
echo " </B> <a href=\"apercu.php?id=" . $ligne[5] . "\">" . $ligne[0] . "</a><br />";
    
    
    
    $_SESSION['IDAMOD'] = $ligne[5];

    echo '
    


<form action="FonctionSuppCV.php" method="POST">  
<input type="hidden" name="IDMODSUPP" value="';echo $ligne[5]; echo'" ></input>
<button class="btn btn-primary" name="suppCV"> Supprimer CV  </button>
        </form>
        </div>
        
<form action="FonctionAddRappel.php" method="POST">
        <div>
<input type="hidden" name="IDMODDate" value="';echo $ligne[5]; echo'" ></input> 
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
     

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
    <script src="assets/js/Custom-File-Upload.js"></script>
    <script src="assets/js/MUSA_product-display.js"></script>
</body>

</html>