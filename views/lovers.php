<?php 

// var_dump($_COOKIE);
$membres = file_get_contents('membres.json');
$membres_decoded = json_decode($membres, true);
// var_dump($membres_decoded);

?>

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
<?php include('template/header.php');?>
    <div class="container mt-5">
    <div class="row">
    <?php 
    foreach($membres_decoded as $value){
        if($value['gender'] == $_COOKIE['interet']){
            ?>
<div class="col-4">
<div class="card">
  <img class="card-img-top mx-auto d-block" src="assets/img/<?php echo $value['picture'];?>" alt="Card image cap" style="width:150px;">
  <div class="card-body">
  <h3><?php echo $value['firstname']; 
  echo (" ");
  echo $value['lastname'];?></h3>
  <p><?php echo $value['age']?></p>
  <p><?php echo $value['zipcode']?></p>
  <p><?php echo $value['description']?></p>
    
  </div>
</div>
</div>


            <?php

        }
    }
    ?>
    </div>

    </div>
</body>

</html>