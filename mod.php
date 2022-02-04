<?php 
    $Id=$_REQUEST['Id'];
    $nev=$_REQUEST['nev'];
    $jelszo=$_REQUEST['jelszo'];
    $email=$_REQUEST['email'];
    $uzenet=$_REQUEST['uzenet'];

    $parancs="UPDATE butor SET nev='$nev',email='$email',jelszo='$jelszo',uzenet='$uzenet' WHERE Id=$Id;";

    $kapcsolat=mysqli_connect("127.0.0.1","root","","butorwebaruhaz");
    mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:lista.php");

?>