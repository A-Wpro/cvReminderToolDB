<?php









    $hote = 'db648575668.db.1and1.com';
    $base = 'db648575668';
    $user = 'dbo648575668';
    $pass = '';
 
    $cnx = mysqli_connect ("db648575668.db.1and1.com","dbo648575668","","db648575668") or die(mysqli_error());
    $ret = mysqli_select_db($cnx,$base) or die(mysqli_error());
?>
