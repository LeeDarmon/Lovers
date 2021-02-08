
<?php

var_dump($_COOKIE);

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
    <div class="container">
        <form action="index.php" method="POST" id="formulaire">
            <div class="col-12"><label class="mt-3" for="nom">Nom : </label><input id="nom" class="form-control input-lg" type="text" name="nom" placeholder="nom" maxlength="30" required></div>
            <div class="col-12"><label class="mt-3" for="prenom">Prenom : </label><input id="prenom" class="form-control input-lg" type="text" name="prenom" placeholder="prenom" maxlength="30" required></div>
            <div class="col-12"><label class="mt-3" for="age">Age : </label><input id="age" class="form-control input-lg" type="text" name="age" placeholder="age" maxlength="2" required></div>

            <div class="col-12 mt-3" name="genre">
            <label>Genre : </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="homme" value="homme" checked>
                <label class="form-check-label" for="homme">
                    Homme
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="genre" id="femme" value="femme">
                <label class="form-check-label" for="femme">
                    Femme
                </label>
            </div>
            </div>
            <div class="col-12"><label class="mt-3" for="email">Email : </label><input id="email" class="form-control input-lg" type="email" name="email" placeholder="email" required></div>
            <div class="col-12"><label class="mt-3" for="codepostal">Codepostal : </label><input id="codepostal" class="form-control input-lg" type="codepostal" name="codepostal" placeholder="codepostal" required></div>
            <div class="col-12 mt-3" name="interet" id="interet">
            <label>Vous êtes intéréssé par : </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="interet" id="homme" value="homme" checked>
                <label class="form-check-label" for="homme">
                    Homme
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="interet" id="femme" value="femme">
                <label class="form-check-label" for="femme">
                    Femme
                </label>
            </div>
            </div>
            <input class="btn btn-success mx-auto d-block mt-5" type="submit" value="rencontrer nos célibataires">
        </form>
    </div>
</body>

</html>