<?php 
    if (isset($_GET['elt'])) {
       $_idd = $_GET['elt']; $_event = getEvent($_idd); 
    
?><!-- Récupère array de l'event -->

<h4 class="form-title"><b><?php echo $_event['titre']; ?></b> | 
    <small><small>
    <a href="index.php?p=accueil">Accueil</a> | 
    <a href="index.php?p=lesevents">Consulter les évènements</a> |
    <a href="index.php?p=ajoutevent">Nouvel évènement</a>
    </small></small></h4><br/>

<div class="row">

    <table class="table">
        <tr>
            <td>Début</td>
            <td><font color="green"><?php echo $_event['dh_debut']; ?></font></td>
        </tr>

        <tr>
            <td>Fin</td>
            <td><font color="red"><?php echo $_event['dh_fin']; ?></font></td>
        </tr>

        <tr>
            <td>Lieu</td>
            <td><b><?php echo $_event['lieu']; ?></b></td>
        </tr>

        <tr>
            <td colspan="2"><center><?php echo $_event['description']; ?></center></td>
        </tr>

        <tr>
            <td><a href="index.php?p=accueil">Modifier l'évènement</a></td>
            <td><a class="text-danger" href="index.php?p=event&del=<?php echo $_idd; ?>">Supprimer l'évènement</a></td>
        </tr>

    </table>

</div>


<?php 
    
}
        if (isset($_GET['del'])) {

            if (suppressionEvent($_GET['del'])) {
                echo '<meta http-equiv="refresh" content="0; URL=index.php?p=lesevents">';
            }
            else
                echo 'non';
        
      }

 

?>