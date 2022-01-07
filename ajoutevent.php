<form method="POST" action=#>

<h4 class="form-title"><b>Nouvel évènement</b> | 
    <small><small><a href="index.php?p=accueil">Accueil</a> | <a href="index.php?p=lesevents">Consulter les évènements</a></small></small></h4><br/>

  <div class="form-row">

    <div class="form-group col-md-6">
      <label>Titre de l'évènement</label>
      <input class="form-control" name="titre">
    </div>

    <div class="form-group col-md-12">
      <label>Description</label>
      <textarea class="form-control" rows="3" style="resize: none;" name="description"></textarea>
    </div>

    <div class="form-group col-md-4">
      <label">Date et heure de début</label>
      <input type="datetime-local" name="dh_debut">
    </div>

    <div class="form-group col-md-4">
      <label>Date et heure de fin</label>
      <input type="datetime-local" name="dh_fin">
    </div>

    <div class="form-group col-md-4">
      <label>Lieu</label>
      <input class="form-control" name="lieu">
    </div>

    </div>

    <button type="submit" class="btn btn-primary" name="trans">Enregistrer</button>

</form>

<!-- Enregistrment des données dans la bd -->

<?php

    $_donnees_recues = isset($_POST['trans']);

    if ($_donnees_recues) { //On va enrégistrer les données ici

        global $con;

        $_titre = $_POST['titre'];
        $_desc  = $_POST['description'];
        $_dd    = $_POST['dh_debut'];
        $_df    = $_POST['dh_fin'];
        $_lieu  = $_POST['lieu'];

       if (nouvelEvenement($_titre, $_desc, $_dd, $_df, $_lieu)) {
           echo "<font color='green'>Evènement enregistré avec succès !</font>";
       }
       else {
           echo mysqli_error($con);
       }

    }

?>