
<?php 

define('INDEX_CONTROLLER', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/');

?>

<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand navbar-brand-centered" href="#">Bonjour <?php echo $_COOKIE['prenom'];?> <3</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo INDEX_CONTROLLER?>Lovers/index.php">Nos célibataires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo INDEX_CONTROLLER?>Lovers/views/user.php">Mes informations</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>