<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/panel.css">
    <script src="static/jquery/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="static/img/logo_size.jpg" class="icon-pestaña">
    <title>TecniData|panel de usuario</title>
</head>
<body>
    <div class="d-flex" id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div class="bg-primary border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-light">Tecnidata | Panel administrativo </div>
          <div class="list-group list-group-flush">
            <a href="mailbox.php" class="list-group-item list-group-item-action bg-primary text-light"><img src="static/img/email.svg" style="width: 22px;height: 37px;"> Correo</a>
            <a href="#" class="list-group-item list-group-item-action bg-primary text-light">Estado</a>
            <a href="#" class="list-group-item list-group-item-action bg-primary text-light">Tickets</a>
            <a href="#" class="list-group-item list-group-item-action bg-primary text-light">Events</a>
            <a href="#" class="list-group-item list-group-item-action bg-primary text-light">Profile</a>
            <a href="#" class="list-group-item list-group-item-action bg-primary text-light">Status</a>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
    
        <!-- Page Content -->
        <div id="page-content-wrapper">
    
          <nav class="navbar navbar-expand-lg navbar-primary bg-primary border-bottom">
            <button class="btn btn-primary bg-secondary" id="menu-toggle"> <img src="static/img/layout.svg" style="width: 15px; height: 30px;"> </button>
    
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Usuario
                  </a>
                  <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-light" href="#">Action</a>
                    <a class="dropdown-item text-light" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-light" href="login.html">Cerrar sesión</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
    
          <div class="container-fluid">
            <h1 class="mt-4">
                <?php
                    $user=$_POST['user'];
                    $password=$_POST['password'];
                    echo "Bienvenido ",$user;
                ?>


            </h1>
            <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
          </div>
        </div>
        <!-- /#page-content-wrapper -->
    
      </div>
      <script>
        $("#menu-toggle").click(function(e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
      </script>
    <script src="static/popper/popper.min.js"></script> 
</body>
</html>