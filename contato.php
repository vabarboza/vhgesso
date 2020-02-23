<?php
session_start();
?>
<!DOCTYPE php>
<php lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>VH Gesso</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
  <style type="text/css">
    body {
      background-color: rgba-grey-slight;
    }
  </style>
</head>

<body>

  <!--Navbar -->
  <nav class="navbar navbar-expand-sm navbar-light white fixed-top scrolling-navbar">
    <a class="navbar-brand" href="index.php">
      <img src="img/content/mdb-transparent.png" height="35" alt="mdb logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="empresa.php">A Empresa
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="forroliso.php">Forro Liso</a>
            <a class="dropdown-item" href="molduras.php">Molduras</a>
            <a class="dropdown-item" href="gessoacartonado.php">Gesso Acartonado</a>
            <a class="dropdown-item" href="sancas.php">Sancas</a>
            <a class="dropdown-item" href="colunasdecorativas.php">Colunas Decorativas</a>
            <a class="dropdown-item" href="gessodecorado.php">Gesso Decorado</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parcerias
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="#">Parceiros Especiais</a>
            <a class="dropdown-item" href="#">Parceiros</a>
            <a class="dropdown-item" href="contato.php">Quero ser um parceiro</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.php">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light">
            <i class="fab fa-instagram"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="https://www.facebook.com/vhgesso/" target="blank">
            <i class="fab fa-facebook"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect waves-light" href="https://bit.ly/2vUZIEi" target="blank">
            <i class="fab fa-whatsapp"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!--/.Navbar -->

  <div id="carouselExampleControls" class="carousel slide carousel-fade mt-5" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/content/01.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/content/02.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/content/03.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Proxima</span>
    </a>
  </div>

  <div class="container-fluid mt-3 mb-3">

    <div class="container-sm">
      <div class="card border border-dark rounded-sm bg-transparent">
        <div class="card-body text-center text-capitalize font-weight-bold">
          FORMULARIO DE CONTATO
        </div>
      </div>

      <!--Section: Contact v.2-->
      <section class="mb-4">

        <!--Section heading-->
        <h2 class="h1-responsive font-weight-bold text-center my-4">Formulario de Contato</h2>
        <!--Section description-->
        <p class="text-center w-responsive mx-auto mb-5">Você tem alguma pergunta? Por favor, não hesite em nos contatar diretamente.
          Nossa equipe entrará em contato com você em questão de horas para ajudá-lo..</p>

        <div class="row">

          <!--Grid column-->
          <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="include/envia-email.php" method="POST">

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="name" class="">Seu Nome</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control">
                    <label for="email" class="">Seu E-Mail</label>
                  </div>
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control">
                    <label for="subject" class="">Assunto</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                  <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    <label for="message">Sua Mensagem</label>
                  </div>

                </div>
              </div>
              <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
            </div>
            <div class="status">
              <br>
              <?php
              //Recuperando o valor da variável global, os erro de login.
              if (isset($_SESSION['enviado'])) {
                $result = '<div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Tudo Certo!</h4>
                <p>Agradecemos seu contato, já recebemos sua mensagem e em breve entraremos em contato.</p>
                <hr>
                <p class="mb-0">Equipe VH Gesso</p>
              </div>';
                echo $result;
                unset($_SESSION['enviado']);
              }
              ?>
            </div>

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
              <li><i class="fab fa-whatsapp-square mt-4 fa-2x"></i>
                <p>(44) 99821-0967</p>
              </li>

              <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>(44) 99821-0967</p>
              </li>

              <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>claudiney.gesso@yahoo.com.br</p>
              </li>
            </ul>
          </div>
          <!--Grid column-->

        </div>

      </section>
      <!--Section: Contact v.2-->

    </div>

  </div>

  <!-- Footer -->
  <footer class="page-footer font-small grey darken-4 pt-4">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">VH Gesso <i class="brazil flag"></i></h5>
          <p>Forros - Molduras - Gesso Acartonado - Divisorias - Sancas - Colunas - Gesso Decorado.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">Telefones</h5>

          <ul class="list-unstyled">
            <li>
              <a><i class="fas fa-mobile-alt"></i> (44) 99821-0967</a>
            </li>
            <li>
              <a><i class="fab fa-whatsapp"></i> (44) 99821-0967</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

          <!-- Links -->
          <h5 class="text-uppercase">E-Mail</h5>

          <ul class="list-unstyled">
            <li>
              <a href="malito:claudiney.gesso@yahoo.com.br"><i class="fas fa-envelope"></i>
                claudiney.gesso@yahoo.com.br</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://vhgesso.com.br"> vhgesso.com.br</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>

</php>