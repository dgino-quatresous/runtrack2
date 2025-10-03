<?php

$page = pathinfo($_SERVER['SCRIPT_NAME'], PATHINFO_FILENAME);

$admin = false;
$connecte = false;

switch ($page) {
    case "index" :
        if ($admin) {
            echo "<header>
            <a href='index.php'>Accueil</a>
            <a href='profil.php'>Profil</a>
            <a href='admin.php'>Admin</a>
                </header>";
        
    }
        elseif ($connecte) {
            echo "<header>
            <a href='index.php'>Accueil</a>
            <a href='profil.php'>Profil</a>
                </header>";

    }   else{
            echo "<header>
            <a href='connexion.php'>Connexion</a>
            <a href='inscription.php'>Inscrivez vous</a>
                </header>";
    }
    break;
    case "profil" :
        if ($admin) {
            echo "<header>
            <a href='index.php'>Accueil</a>
            <a href='profil.php'>Profil</a>
            <a href='admin.php'>Admin</a>
                </header>";
        
    }
        elseif ($connecte) {
            echo "<header>
            <a href='index.php'>Accueil</a>
            <a href='profil.php'>Profil</a>
                </header>";

    }   else{
            echo "<header>
            <a href='connexion.php'>Connexion</a>
            <a href='inscription.php'>Inscrivez vous</a>
                </header>";
    }
    break;
}
?>