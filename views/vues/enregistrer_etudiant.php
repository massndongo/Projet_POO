
<!DOCTYPE html>
 <html>
    <head>
        <title></title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="../public/css//bootstrap.css">
        <style>
          .input,.btn{
                  width: 80%;
                  height:40px;
                }
        </style>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
     </head>
     <body>
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
                <a class="nav-link mx-5" href="#" >Rechercher </a>
              </li>
            </ul>
          </div>
        </nav>
             <form method="post" id="formEtudiant">
             <div class="form-group p-3">
                   <input disabled="disabled" type="text" class="form-control input" name="matricule" id="matricule" placeholder="Matricule">
                  </div>
                 <div class="form-group p-3">
                   <input type="text" class="form-control input" name="prenom" id="prenom" placeholder="Prenoms">
                   <span id="prenom_error" class="font-weight-bold"></span>
                  </div>
                 <div class="form-group p-3">
                   <input type="text" class="form-control input" name="nom" id="nom" placeholder="Nom">
                   <span id="nom_error" class="font-weight-bold"></span>
                  </div>                 
                  <div class="form-group p-3">
                   <input type="text" class="form-control input" name="email" id="email" placeholder="Email">
                   <span id="email_error" class="text-danger font-weight-bold"><?=isset($error['email']) ? $error['email']  : "" ?></span>
                  </div>                 
                  <div class="form-group p-3">
                   <input type="text" class="form-control input" name="tel" id="tel" placeholder="Telephone">
                   <span id="tel_error" class="text-danger font-weight-bold"><?=isset($error['tel']) ? $error['tel']  : "" ?></span>
                  </div>
                  <div class="form-group p-3">
                   <input type="date" class="form-control input" name="dateNaissance" id="date" placeholder="Date de Naissance">
                   <span id="date_error" class="font-weight-bold"></span>
                  </div>
                 <div class="form-group p-3">
                   <select id="selection" class="form-control input" name="typeEtudiant">
                   
                     <option value="">Type Etudiant</option>
                     <option value="Boursier">Boursier</option>
                       <option value="Loger">Loger</option>
                       <option value="NonLoger">Non Loger</option>
                     </optgroup>
                   </select>
                   <span id="selection_error" class="font-weight-bold"></span>
                 </div>
                 <div class="form-group p-3 adresse">
                   
                  </div>
                 <div class="form-group p-5"> 
                  <button class="btn btn-primary" name="btnFormEtudiant" id="btnFormEtudiant" name="btn" type="submit">Enregistrer</button>
                 </div>
             </form>
    </body>
    <script src="<?=BASE_URL?>/public/js/script.js"></script>
</html>