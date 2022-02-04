<?php 
    $nev=$_REQUEST['nev'];
    $jelszo=$_REQUEST['jelszo'];
    $uzenet=$_REQUEST['uzenet'];

    $parancs="INSERT INTO butor (nev,jelszo,uzenet) VALUES ('$nev','$jelszo','$uzenet');";

    $kapcsolat=mysqli_connect("127.0.0.1","root","","bútorwebáruház");
    mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:index.html");
?>