
<?php include('../controllers/user_controller.php');?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="asset/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<?php include('../template/header.php');?>
    <div class="container">
    <div class="col-8 offset-2 mt-5">
    <div class="card">
  <img class="card-img-top mx-auto d-block" src="../assets/img/img1.png" alt="Card image cap" style="width:150px;">

  <div class="card-body">

  <?php echo $_COOKIE['nom'] ?>
  <?php echo (" ");?>
  <?php echo $_COOKIE['prenom'] ?>
  <?php echo ("<br>");?>
  <?php echo $_COOKIE['age'] ?>
  <?php echo ("<br>");?>
  <?php echo $_COOKIE['genre'] ?>
  <?php echo ("<br>");?>
  <?php echo $_COOKIE['codepostal'] ?>
  <?php echo ("<br>");?>
  <?php echo $_COOKIE['email'] ?>
  <?php echo ("<br>");?>
  <?php echo 'Interet : '.$_COOKIE['interet'] ?>

 
  <div class="row mt-3">
    <div class="col-6"><a href="#"><input type="button" class="btn btn-success mx-auto d-block" id="meetic" value="take my money"></a></div>
    <div class="col-6"><a href="../index.php?deconnexion=1"><input type="button" class="btn btn-success mx-auto d-block" id="deconnexion" value="deconnexion" name="deconnexion"></a></div>
    </div>

  
  </div>
</div>
    </div>
    </div>

</body>
</html>