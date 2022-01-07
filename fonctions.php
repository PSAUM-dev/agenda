<?php

    //Enregistre nouvel event
    function nouvelEvenement($_titre, $_desc, $_dd, $_df, $_lieu) {

        global $con;

        $req  = "INSERT INTO evenements VALUES (0, '$_titre', '$_desc', '$_dd', '$_df', '$_lieu')";

        return mysqli_query($con, $req);

    }

    //Récupère dernier évent
    function dernierEvent() {

        global $con;

        $req    = "SELECT * FROM evenements ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $req);

        return mysqli_fetch_assoc($result);

    }

    //Supprimer un event
    function suppressionEvent($_id) {

        global $con;

        return mysqli_query($con, "DELETE FROM evenements WHERE id=$_id");

    }

    //Récupère un évent
    function getEvent($_id) {

        global $con;

        $req    = "SELECT * FROM evenements WHERE id=$_id";
        $result = mysqli_query($con, $req);

        return mysqli_fetch_assoc($result);

    }

?>