<?php
if (isset($_GET["deconnexion"])) {

    unset($_COOKIE['genre']);
    unset($_COOKIE['email']);
    unset($_COOKIE['codepostal']);
    unset($_COOKIE['nom']);
    unset($_COOKIE['prenom']);
    unset($_COOKIE['age']);
    unset($_COOKIE['interet']);

    setcookie('genre', null, -1, '/'); 
    setcookie('email', null, -1, '/'); 
    setcookie('codepostal', null, -1, '/'); 
    setcookie('nom', null, -1, '/'); 
    setcookie('prenom', null, -1, '/'); 
    setcookie('age', null, -1, '/'); 
    setcookie('interet', null, -1, '/'); 

    var_dump($_COOKIE);
}
?>