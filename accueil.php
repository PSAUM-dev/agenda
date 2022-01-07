<div class="row">

<!-- Navigation.. gestion.. évènement -->

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Vos évènements</h5>
        <p class="card-text">Les évènements créés sont consultables ici</p>
        <a href="index.php?p=lesevents" class="btn btn-primary">Consulter les évènements</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Nouvel évènement</h5>
        <p class="card-text">Vous pouvez ajouter un évènement ici</p>
        <a href="index.php?p=ajoutevent" class="btn btn-primary">Ajouter un évènement</a>
      </div>
    </div>
  </div>

</div>

<div class="jumbotron bg-white">
<h3 align="center">Dernier évènement créé</h3>

    <div class="row">

        <div class="col">

           <div class="col-12"></div>
           <div class="col-12"></div>

            <!-- Le dernier évènement -->

            <!-- Récupération depuis la bd -->
            <?php
              $_dernierEvent = dernierEvent();
            ?>

            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $_dernierEvent['titre']; ?></h5>

                    <table class="table">
                        <tr>
                            <td>Début</td>
                            <td><font color="green"><?php echo $_dernierEvent['dh_debut']; ?></font></td>
                        </tr>

                        <tr>
                            <td>Fin</td>
                            <td><font color="red"><?php echo $_dernierEvent['dh_fin']; ?></font></td>
                        </tr>

                        <tr>
                            <td>Lieu</td>
                            <td><b><?php echo $_dernierEvent['lieu']; ?></b></td>
                        </tr>

                    </table>

                    <p class="text-left"><?php echo $_dernierEvent['description']; ?></p>

                    <a href="#" class="btn btn-primary">Consulter</a>
                </div>
            </div>

        </div>


    </div>

</div>