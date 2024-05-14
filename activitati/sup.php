<?php
include 'conectare.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stand-Up Paddleboarding la Lacul Bezid</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<?php
include '../admin/header.php';
?>

<style>
  body {
    background-color: #f8f9fa;
  }

  .jumbotron {
    background-color: lightgray;
    color: white;
  }
</style>
</head>

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
          <img src="../images/sup1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-inline d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/sup2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-inline d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/sup3.jpg" class="d-block w-100" alt="...">
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


    <!--  -->


    <div class="container">
      <div class="jumbotron text-center mt-5">
        <h2>Experimentează Libertatea SUP pe Lacul Bezid</h2>
        <p class="lead">Îți dorești o aventură plină de adrenalină și relaxare? Descoperă frumusețea naturală a Lacului Bezid pe o placă de Stand-Up Paddleboard!</p>
      </div>

      <div class="row mt-5">
        <div class="col-md-6">
          <h2>Aventură pe Apă</h2>
          <p>Încearcă o experiență unică de Stand-Up Paddleboarding, navigând pe apele liniștite ale Lacului Bezid. Admirați peisajele pitorești dintr-o perspectivă unică și bucură-te de libertatea de a fi pe apă.</p>
        </div>
        <div class="col-md-6">
          <img src="../images/sup3.jpg" alt="Stand-Up Paddleboarding" class="img-fluid rounded">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-6">
          <img src="../images/sup.jpg" alt="Natură" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
          <h2>Conectează-te cu Natura</h2>
          <p>Explorarea Lacului Bezid pe o placă de SUP te va aduce mai aproape de natură. Simte briza lacului în păr, aude sunetul liniștitor al apei și privește flora și fauna locală în timp ce navighezi pe apă.</p>
        </div>
      </div>

      <div class="text-center mt-5">
        <p class="lead">Nu aștepta! Începe-ți aventura pe apă chiar acum și rezervă o sesiune de Stand-Up Paddleboarding la Lacul Bezid.</p>
        <a href="http://localhost/prglamping/admin/rezervare.php" class="btn btn-primary btn-lg">Rezervă Acum</a>
      </div>
    </div>
    <!--  -->

  </div>
  <?php
  include '../admin/includes/footer.php';
  ?>
</body>

</html>