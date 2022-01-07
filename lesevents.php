<h4 class="form-title"><b>Liste des évènements</b> | 
    <small><small><a href="index.php?p=accueil">Accueil</a> | <a href="index.php?p=ajoutevent">Nouvel évènement</a></small></small></h4><br/>

<div class="row">

     <?php 
     
        global $con;

        $req    = "SELECT * FROM evenements ORDER BY id DESC";
        $result = mysqli_query($con, $req);
        
        while ($_event = mysqli_fetch_assoc($result)) { 

    ?>

        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_event['titre']; ?></h5>

                <table class="table">
                        <tr>
                            <td>Début</td>
                            <td><font color="green"><?php echo $_event['dh_debut']; ?></font></td>
                        </tr>

                        <tr>
                            <td>Lieu</td>
                            <td><b><?php echo $_event['lieu']; ?></b></td>
                        </tr>
                </table>

                <a href='index.php?p=event&elt=<?php echo $_event['id']; ?>' class="btn btn-primary">Consulter</a> 
                    <small>
                        <font color="red">
                            <a class="text-danger" href='index.php?p=lesevents&del_event=<?php echo $_event['id']; ?>'>
                                Supprimer l'évènement
                            </a>
                        </font>
                    </small>
            </div>
            </div>
        </div>

        

    <?php 
    
        } 
    
        if (isset($_GET['del_event'])) {

            if (suppressionEvent($_GET['del_event'])) {
                echo "<font color='green'>Evènement enregistré avec succès !</font>";
                echo '<meta http-equiv="refresh" content="0; URL=index.php?p=lesevents">';
            }
            else
                echo 'non';
        
      }

    ?>


</div>