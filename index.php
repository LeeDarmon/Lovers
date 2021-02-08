<?php include('controllers/index_controller.php');
include('controllers/user_controller.php');

    if(!empty($_COOKIE['nom'])){
        include('views/lovers.php');
    }
    else {
        include('template/form.php');
    }
?>

