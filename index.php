<?php include('controllers/index_controller.php');
include('controllers/user_controller.php');

    if(empty($_COOKIE)){
        include('template/form.php');
    }
    else {
        include('views/lovers.php');
    }
?>

