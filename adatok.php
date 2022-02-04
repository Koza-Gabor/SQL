<?php
    $nev=$_REQUEST['nev'];
    $jelszo=$_REQUEST['jelszo'];
    $email=$_REQUEST['email'];
    $uzenetek=$_REQUEST['uzenetek'];

    $parancs="INSERT INTO butor (nev,jelszo,email,uzenetek) VALUES ('$nev','$jelszo','$email','$uzenetek');";

    $kapcsolat=mysqli_connect("127.0.0.1","root","","butorwebaruhaz");
    mysqli_query($kapcsolat,$parancs);
    mysqli_close($kapcsolat);
    header("Location:index.html");

?>