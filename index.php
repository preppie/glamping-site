<?php
include 'conectare.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PREPPIE GLAMPING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<?php
include 'admin/header.php';
?>

<body>

  <div class="container-md">

    <!-- CAROUSEL -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/glamping.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-inline d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/levendulas.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-inline d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/glamping.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-inline d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- END OF CAROUSEL -->


    <!-- HERO -->
    <div class="px-4 py-3 my-5 text-center">
      <img src="images/Bozodi-to-levendula.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
      <h1 class="display-5 fw-bold text-body-emphasis">Vino și vizitează-ne</h1>
      <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias cumque esse est maxime atque ducimus quod porro beatae repellendus voluptas, culpa numquam, vel ut minus fugiat, nobis tempora enim nisi!</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="http://localhost/prglamping/admin/rezervare.php" class="btn btn-primary btn-lg px-4 gap-2">Rezervare</a>
        </div>
      </div>
    </div>
    <!-- END OF HERO -->



    <!-- ACTIVITATI -->
    <div class="container px-4 py-3" id="custom-cards">
      <h2 class="pb-2 border-bottom">Activitati</h2>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <?php

        $queryactivitati = "SELECT activitati.cod_activitate, activitati.nume_activ, activitati.descriere_activ, activitati.descriere_scurt, activitati.foto_activitati FROM activitati";
        //  Execut comanda SQL
        $trimitcom = mysqli_query($cnx, $queryactivitati) or die("Eroare: " . mysqli_error($cnx));
        while ($rezactiv = mysqli_fetch_assoc($trimitcom)) : ?>


          <div class="col" style="min-height: 500px;">
            <a href="activitati/<?= strtolower($rezactiv['nume_activ']) ?>.php" style="text-decoration:none;">
              <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('images/<?= $rezactiv['foto_activitati'] ?>'); background-size: cover;">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold"><?= $rezactiv['descriere_activ'] ?></h3>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="d-flex align-items-center me-3">
                      <small><?= $rezactiv['descriere_scurt'] ?></small>
                    </li>
                  </ul>
                </div>
              </div>
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>

    <!-- END OF ACTIVITATI -->


    <!-- Echipa -->
    <div class="container px-4 py-5 " id="custom-cards">
      <h2 class="pb-2 border-bottom">Echipa</h2>

      <div class="container py-5">
        <div class="row mt-4">

          <?php
          require 'conectare.php';


          $query = "SELECT * FROM angajati";
          $query_run = mysqli_query($cnx, $query);
          $check_angajati = mysqli_num_rows($query_run) > 0;

          if ($check_angajati) {
            while ($row = mysqli_fetch_array($query_run)) {

          ?>

              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <img src="images/<?php echo $row['foto']; ?>" class="card-img-top" alt="Echipa">
                    <h4 class="card-title"> <?php echo $row['nume'] ?></h4>
                    <h4 class="card-title"> <?php echo $row['prenume'] ?></h4>
                    <p class="card-text">
                      email: <?php echo $row['email'] ?> <br>
                      Nr. Tel: <?php echo $row['nr_tel'] ?>
                    </p>
                  </div>
                </div>
              </div>

          <?php

            }
          } else {
            echo "No echipa found";
          }
          ?>


        </div>
      </div>

      <!-- END OF Echipa -->

    </div>
    <?php
    include 'admin/includes/footer.php';
    ?>
</body>

</html>