<?php
include 'sesiune.php';
$home_active = ' class="active"';
//include 'header.php'; 
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PREPPIE GLAMPING ADMIN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div class="container-md">


    <?php

    session_start();
    if (isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
      include 'includes/admin_header.php';
    } else {
      include 'header.php';
    }

    ?>


    <!-- NAVBAR -->


    <!-- END OF NAVBAR -->





    <!-- HERO 
<div class="px-4 py-5 my-5 text-center">
  <h1 class="display-5 fw-bold text-body-emphasis">Centered hero</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
    <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
      <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
    </div>
  </div>
</div>
 END OF HERO -->
    <!-- ======= Hero Section ======= -->
    <section id="hero">
      <div class="hero-container px-4 py-5 my-5 text-center">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

          <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

          <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background: url(../images/adm_backgr.jpg);">
              <div class="carousel-container py-5 my-5">
                <div class="carousel-content" style="color: #ffffff;">
                  <h2>Glamping Admin</h2>
                  <p>Aplicație web destinată gestionării bazei de date a site-ului <em>PREPPY GLAMPING</em>.</p>
                  <div class="<?= $display_btcon ?>">
                    <a href="logare.php" class="btn btn-primary">Conectare</a>
                  </div>
                  <div class="<?= $display_btdecon ?>">
                    <a href="delogare.php" class="btn btn-danger">Deconectare</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End Hero -->
    <main id="main">

    </main><!-- End #main -->



    <!-- FOOTER -->
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>

      <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
          <use xlink:href="#bootstrap"></use>
        </svg>
      </a>

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
      </ul>
    </footer>
    <!-- END OF FOOTER -->

  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>