
     <nav class="navbar navbar-expand-lg navbar-light" id="menu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerEtudiant/saveEtudiant">Enrégistrer Etudiant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerEtudiant/listEtudiant">Liste Etudiant</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="#" >Rechercher</a>
              </li>
            </ul>
          </div>
        </nav>
<div class="col md-4">
    <table class="table table-striped text-white text-center table-responsive-xl table-responsive-md">
        <thead class="font-weight-bold thead-dark">
            <tr>
                <td>Matricule</td>
                <td>Prenoms</td>
                <td>Nom</td>
                <td>Email</td>
                <td>Numéro Téléphone</td>
                <td>Date de Naissance</td>
                <td>Type Etudiant</td>
                <td>Adresse</td>
                <td>Montant Bourse</td>

            </tr>
        </thead>
        <tbody id="tbody">
        <?php 
        foreach ($data as $key => $value) { ?>
            <tr>
                <td><?= $value->getMatricule();?></td>
                <td><?= $value->getPrenom();?></td>
                <td><?= $value->getNom();?></td>
                <td><?= $value->getEmail();?></td>
                <td><?= $value->getTel();?></td>
                <td><?= $value->getdateNaissance();?></td>
                <td><?= $value->gettypeEtudiant();?></td>
                <td><?= $value->getAdresse();?></td>
                <td><?= $value->getMontant();?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>