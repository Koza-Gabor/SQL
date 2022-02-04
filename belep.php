<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Bútor Webáruház</title>
</head>
<body>
<div class="container-fluid bg-light py-2">
    <h1 class="display-1 text-center ">Bútor Webshop</h1>
</div>

<?php
    if (!isset($_REQUEST['nev']))
      {
?>
    <div class="container_fluid">
        <form action="belep.php">
        <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        </form>

    </div>
<?php
      }
    else 
      {

      }
?>


<div class="container-fluid">
    <?php
        session_start();
        $_SESSION['nev']="Zsolti";
        header("location:butorweboldal.php");
    ?>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>