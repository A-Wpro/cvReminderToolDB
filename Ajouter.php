<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nerytec</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/CanitoFormularioCompra2.css">
        <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>
        <form>
    	<body>
            <header>    
                <a href="choix.php">
                    <img class="left" src="assets/img/NerytecLogo.jpg" />
</a>
            </header>
		</form>

    <div class="container">
            <form enctype="multipart/form-data" action="FonctionAjoutCV.php" method="POST">
                
            <div class="form-row text-left" style="padding: 0px;">
                <div class="col-md-6" id="message">
                    <fieldset style="margin: 0px;padding: 0px;height: 40px;width: 460px;">
                        <legend style="font-style: normal;font-weight: bold;font-size: 23px;height: 23px;">Ajout CV</legend>
                    </fieldset>
                        <div><label  style="font-size: 15px;">Nom</label><input class="form-control" name="Nom" type="text"></div>
                    <div><label  style="font-size: 15px;">Ville</label><input class="form-control"type="text" id="from_name" tabindex="-1" name="Ville" required="" style="font-size: 21px;height: 45.5px;"></div>
               <div>     <label  style="font-size: 15px;">Numero</label><input class="form-control" type="tel" name="Tel" value="+33    " style="font-size: 21px;"></div>
                <div>    <label  style="font-size: 15px;">Type
                    <select class="form" name="poste" id="poste-Select">
    <option value="">--Choisissez le poste--</option>
    <option value="Business manager">Business manager</option>
    <option value="Responsable d’agence">Responsable d’agence</option>
    <option value="Directeur d’agence">Directeur d’agence</option>
    <option value="Key account manager">Key account manager</option>
    <option value="Account manager">Account manager</option>
    <option value="Directeur commercial">Directeur commercial</option>
    <option value="Ingénieur d’affaires">Ingénieur d’affaires</option>
    <option value="Ingénieur commercial">Ingénieur commercial</option>
    <option value="Bid manager">Bid manager</option>  
        
    
          
    
</div>
               
</select>
                    
                        <div><label   style="font-size: 15px;">Date rappel</label><input class="form-control" name="date" type="date"></div>
        <div>   <label class="form-group" style="font-size: 15px;">Commentaire (autre ex: expérience, ancien entreprise,etc...)</label><input class="form-control" type="text" name="Commentaire"></div>
                    <hr>
                </div>  
            </div>
    </div>
    
        <button name="ajout" class="btn btn-primary btn-block"   type="submit">Ajouter </button>
            </form>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>


