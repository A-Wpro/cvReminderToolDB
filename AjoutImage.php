    <?php
echo'
<html>
   <head>
      <title>Stock d images</title>
   </head>
   <body>
  </html>
  
  ';
      
         
         $IDIMG=$_GET['idImage'];
     
         
         include ("transfert.php");
         if ( isset($_FILES['fic']) )
         {
             if(transfert($IDIMG)==TRUE){
               
                 header('Location: https://bdd.nerytec.com/Ajouter.php');   
             echo 'CV AJOUTER, CLIQUEZ SUR LE LOGO POUR VOUS REDIRIGEZ VERS L AJOUT DE CV';
                            echo '<html>
                 <a href="choix.php">
                    <img src="assets/img/NerytecLogo.jpg" />
</a>
                 </html>';
             }
           else
           {
             echo 'Erreur';
           }
           
         }

 
      echo'<html>
      <h3>Envoi d une image</h3>
      <form enctype="multipart/form-data" method="post">
      
         <input type="hidden" name="MAX_FILE_SIZE" value="2500000" />
         <input type="file" name="fic" size=50 />
         <input type="submit" value="Envoyer" />
      </form>
   </body>
</html>';

?>