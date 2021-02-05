<?php 

$timestamp = time()+24*3600;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    setcookie('nom',$_POST['nom'],$timestamp, '/');
    setcookie('prenom',$_POST['prenom'],$timestamp, '/');
    setcookie('age',$_POST['age'],$timestamp, '/');
    setcookie('genre',$_POST['genre'],$timestamp, '/');
    setcookie('email',$_POST['email'],$timestamp, '/');
    setcookie('codepostal',$_POST['codepostal'],$timestamp, '/');
    setcookie('interet',$_POST['interet'],$timestamp, '/');

}
