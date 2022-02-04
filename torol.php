<<?php 
    $Id=$_REQUEST['Id'];   

    $parancs="DELETE FROM butor WHERE Id=$Id";

    $kapcsolat=mysqli_connect("127.0.0.1","root","","butorwebaruhaz");
    mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
    header("Location:lista.php");

?>