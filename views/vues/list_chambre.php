<nav class="navbar navbar-expand-lg navbar-light" id="menu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerChambre/saveChambre">Enrégistrer Chambre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerChambre/listChambre">Liste Chambre</a>
              </li>
            </ul>
          </div>
</nav>
<div class="col">
    <table class="table table-striped text-white text-center">
        <thead class="font-weight-bold">
            <tr>
                <td>Numéro Chambre</td>
                <td>Numéro Batiment</td>
                <td>Type Chambre</td>
                <td>Modifier</td>
                <td>Supprimer</td>
            </tr>
        </thead>
        <tbody id="tbody">
        <?php 
        foreach ($data as $key => $value) { ?>
            <tr>
                <td><?= $value->getnumChambre();?></td>
                <td><?= $value->getnumBatiment();?></td>
                <td><?= $value->gettypeChambre();?></td>
                <td><a href="#"><span class="iconify" data-inline="false" data-icon="eva:edit-outline" style="font-size: 24px; color: #1AE716;"></span></a></td>
                <td><a href="<?=BASE_URL?>/ControllerChambre/deleteChambre"><span class="iconify" data-inline="false" data-icon="mdi:delete" style="font-size: 24px; color: red;"></span></a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>