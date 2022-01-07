<?php
    /*
     * mysql.php
     * Agenda Electronique
     * @author : IKE Dominique [dev indé de jeux vidéos]
    */

    /* Objet de connexion */
    global $con;
    
    /* Infos pour la connexion au serveur */
    $serveur = 'localhost';
    $user    = 'root';
    $pass    = '';
    $port    = 3306;
    
    /* Base de données */  
    $bd      = 'agenda';
    
    /* Connextion à la bd */
    if (!$con = mysqli_connect($serveur, $user, $pass, $bd, $port))
    {
        echo 'Connexion échouée';
    }
?>