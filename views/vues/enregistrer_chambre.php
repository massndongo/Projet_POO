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
                  height:50px;
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
                <a class="nav-link mx-5" href="<?=BASE_URL?>/ControllerChambre/saveChambre">Enrégistrer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-5" href="#">Lister</a>
              </li>
            </ul>
          </div>
        </nav>
             <form method="post" id="form">
                 <div class="form-group p-3 ">
                  
                   <input disabled="disabled" type="text" class="form-control input" name="numChambre" id="num" placeholder="NUMERO CHAMBRE">
                 </div>
                 
                 <div class="form-group p-3">
                  
                   <input type="number" class="form-control input" name="numBatiment" id="numbat" placeholder="NUMERO BATIMENT">
                   <span id="numbat_error"></span>
                  </div>
                 
                 <div class="form-group p-3">
                   <select id="selection" class="form-control input" name="typeChambre">
                   <span id="selection_error"></span>
                     <option value="">Type de Chambre</option>
                     <option value="individuel">INDIVIDUEL</option>
                       <option value="deux">A DEUX</option>
                       
                     </optgroup>
                   </select>
                 </div>
                 <div class="form-group p-5"> 
                  <button class="btn btn-primary" name="btnFormChambre" id="btnFormChambre" type="submit">Enregistrer</button>
                 </div>
             </form>
    </body>
    <script src="<?=BASE_URL?>/public/js/script.js"></script>
</html>