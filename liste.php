
<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>
      <?php
      
      
         $cnx = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","","db648575668");
         $req = "SELECT img_nom, img_id " .
                "FROM images ORDER BY img_nom";
         $ret = mysqli_query ($cnx,$req) or die (mysqli_error ());
         while ( $col = mysqli_fetch_row ($ret) )
         {
             echo "<a href=\"apercu.php?id=" . $col[1] . "\">" . $col[0] . "</a><br />";
         }
      ?>
       
       
   </body>
</html>
