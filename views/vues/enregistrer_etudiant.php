
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
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerEtudiant/saveEtudiant">Enrégistrer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="#">Lister</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="#" >Rechercher</a>
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
                   <span id="selection_error"></span>
                     <option value="">Type Etudiant</option>
                     <option value="Boursier">Boursier</option>
                       <option value="Loger">Loger</option>
                       <option value="NonLoger">Non Loger</option>
                     </optgroup>
                   </select>
                 </div>
                 <div class="form-group p-3 adresse">
                   
                  </div>
                 <div class="form-group p-5"> 
                  <button class="btn btn-primary" name="btnFormEtudiant" id="btnFormEtudiant" name="btn" type="submit">Enregistrer</button>
                 </div>
             </form>
    </body>
    <script>
    $(document).ready(function(){
      $('#selection').change(function(){
          if ($('#selection').val()==='NonLoger') {
          $( ".adresse" ).append( '<input type="text" class="form-control input" name="adresse" id="adresse" placeholder="Adresse"><span id="adresse_error" class="font-weight-bold"></span>' );
        }else if ($('#selection').val()==='Loger' || $('#selection').val()==='Boursier'){
              $( ".adresse" ).append( '<input type="text" class="form-control input" name="montant" id="montant" placeholder="Montant Bourse"><span id="montant_error" class="font-weight-bold"></span>' );
            }
      });
      $("#prenom_error").hide();
      $("#nom_error").hide();
      $("#date_error").hide();


    var error_prenom = false;
    var error_nom = false;
    var error_date = false;

    function check_prenom() {
      var prenom_length = $("#prenom").val().length;
      if(prenom_length < 1) {
          $("#prenom_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#prenom_error").show();
          error_prenom= true;
      }else {
          $("#prenom_error").hide();
      }
    }
    function check_nom() {
      var nom_length = $("#nom").val().length;
      if(nom_length < 1) {
          $("#nom_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#nom_error").show();
          error_nom= true;
      }else {
          $("#nom_error").hide();
      }
    }

    function check_date() {
      var date_length = $("#date").val().length;
      if(date_length < 1) {
          $("#date_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#date_error").show();
          error_date= true;
      }else {
          $("#date_error").hide();
      }
    }



    $("#prenom").focusout(function() {
      check_prenom();
    });
    $("#nom").focusout(function() {
      check_nom();
    });
    $("#date").focusout(function() {
      check_date();
    });
  

    $("#btnFormEtudiant").on('click', function() {
   
      error_prenom = false;
      error_nom = false;
      error_date = false;
 
 
   check_prenom();
   check_nom();
   check_date();

   if(error_prenom == false && error_nom == false && error_date == false) {
       return true;
   }else {
       return false;
   }
 });



    })
    </script>
</html>