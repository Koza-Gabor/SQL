<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body style="max: width 1300px;">
    <?php 
    $parancs="SELECT * FROM butor";

    $kapcsolat=mysqli_connect("127.0.0.1","root","","butorwebaruhaz");
    $eredmeny=mysqli_query($kapcsolat, $parancs);
    mysqli_close($kapcsolat);
  ?>

    <div style="width:200px;float:left">Név</div>
    <div style="width:200px;float:left">Email</div>
    <div style="width:600px;float:left">Üzenetek</div>
    <br>
    <?php 
    while($sor=mysqli_fetch_array($eredmeny,MYSQLI_ASSOC))
    {
?>
    <div style="width:200px;float:left"><?php print($sor['nev']); ?></div>
    <div style="width:200px;float:left"><?php print($sor['email']); ?></div>
    <div style="width:600px;float:left"><?php print($sor['uzenetek']); ?></div>
    <form action="modosit.php" style="width:100px;float:left">
        <input type="hidden" name="Id" value="<?php print($sor['Id']); ?>">
        <input type="submit" value="módosít">
    </form>
    <form action="torol.php" style="width:100px;float:left">
        <input type="hidden" name="Id" value="<?php print($sor['Id']); ?>">
        <input type="submit" value="töröl">
    </form>
    </br>

<?php
    }
?>

</body>
</html>