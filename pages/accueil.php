<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/styl.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <title>Accueil</title>
</head>
<body>
    <div class="container-fluid bgHeader">
        <header>
            <h2 class="text-center text-white">PLATEFORME D'ALLOCATION CHAMBRE</h2>
        </header>
    </div>
    <!-- Vertical navbar -->

    <div class="vertical-nav bg-white" id="sidebar">

        <div class="py-4 px-3 mb-4 ">
        </div>

        <h2 class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</h2>
        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
              <a href="#" class="nav-link p-5 text-dark font-bold">
                        <i class="fa fa-th-large mr-3"><span class="iconify" data-inline="false" data-icon="ant-design:appstore-outlined"></span></i>
                        Accueil
                    </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link p-5  text-dark font-bold">
                        <i class="fa fa-address-card mr-3"><span class="iconify" data-inline="false" data-icon="noto-v1:man-student-medium-light-skin-tone"></span></i>
                        Etudiant
                    </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link p-5 text-dark font-bold">
                        <i class="fa fa-cubes mr-3 fa-fw"><span class="iconify" data-inline="false" data-icon="dashicons:admin-home"></span></i>
                        Chambre
                    </a>
            </li>
          </ul>
    </div>
       <!-- End vertical navbar -->

    <!-- Page Content -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

        <nav class="navbar navbar-expand-lg navbar-light" id="menu">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link mx-5" href="#">Enrégistrer</a>
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
          <div class="page">
            <?php require_once "enregistrer_chambre.php";
            ?>
          </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function() {
  // Sidebar toggle behavior
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});
    </script>
</body>
</html>