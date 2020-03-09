







<html>

<body>
    <form>
    	<body>
            <header>    
                <a href="choix.php">
                    <img src="assets/img/NerytecLogo.jpg" />
</a>
            </header>
		</form>
	

    <form action="FonctionRecherche.php" method="POST">
        <div><label >Barre de recherche</label>
        <input type="text" name="recherche">    
    </div>
                     
       <div><label >Type de recherche</label>
    <select class="form" name="RechercheOption" id="Option-Select">
    <option value="Nom">Nom</option>
    <option value="Ville">Ville</option>
    <option value="Type">Type de poste</option>
    <option value="Commentaire">Commentaire (autre)</option>
  
</select>    
</div>
         <button class="btn btn-primary" > Lancer la recherche</button>
        
 </form>
        </body>
</html>



<?php


?>