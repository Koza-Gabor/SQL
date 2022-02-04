<?php 
  $Id=$_REQUEST['Id'];
  $parancs="SELECT * FROM butor WHERE Id=$Id";

  $kapcsolat=mysqli_connect("127.0.0.1","root","","butorwebaruhaz");
  $eredmeny=mysqli_query($kapcsolat, $parancs);
  mysqli_close($kapcsolat);
  $sor=mysqli_fetch_array($eredmeny,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mod.php" method="GET">
        <label for="nev">Név:</label>
        <input type="text" name="nev" id="nev" value="<?php print($sor['nev']); ?>"><br>

        <label for="jelszo">Jelszó:</label>
        <input type="text" name="jelszo" id="jelszo" value="<?php print($sor['jelszo']); ?>"><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php print($sor['email']); ?>"><br>

        Üzenet:
        <textarea name="uzenetek" style="height: 100px;"><?php print($sor['uzenet']); ?></textarea><br><br>
        
         <input type="hidden" name="Id" value="<?php print($sor['Id']); ?>">
        <input type="submit" value="Módosít">
    </form>
</body>
</html>