<?php
    /*
     * index.php
     * Agenda Electronique
     * @author : IKE Dominique [dev indé de jeux vidéos]
    */

    require_once("mysql.php");
    require_once("fonctions.php");
    require_once("entete.php");

    if (!isset($_GET['p']))
        $_GET['p'] = 'accueil';

    switch($_GET['p'])
    {   
        case 'event'     :
        case 'lesevents' :
        case 'ajoutevent':
        case 'accueil'   :
            include($_GET['p'].".php");
        break;

        default : include("nopage.php");
    }

    
    require_once("piedpage.php");


?>
