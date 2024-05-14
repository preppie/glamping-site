<?php
include 'conectare.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explorări Naturale - Trasee de Drumeții la Lacul Bezid</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<?php
include '../admin/header.php';
?>

<style>
  h2 {
    color: black;
  }

  body {
    background-color: #f8f9fa;
    color: #343a40;
    /* Schimbă culoarea textului pentru a fi mai vizibil pe fundalul gri deschis */
  }

  .hero-section {
    background-image: url('tiny-dream-hero.jpg');
    background-size: cover;
    background-position: center;
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-align: center;
  }

  .card {
    border: none;
    transition: transform 0.2s;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    /* Adaugă o umbră sub carduri pentru a le evidenția */
  }

  .card:hover {
    transform: translateY(-5px);
  }

  .card-img-top {
    height: 200px;
    object-fit: cover;
  }
</style>
</head>

<body>

  <div class="container">

    <h2>Cazari</h2>
    <p style="color: black;">O experiență de glamping în mijlocul naturii</p>


    <div class="row mt-5">
      <div class="col-md-6">
        <div class="card">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/tiny_dream.jpg" class="d-block w-100" alt="Tiny Dream 1">
              </div>
              <div class="carousel-item">
                <img src="../images/tiny_dream2.jpg" class="d-block w-100" alt="Tiny Dream 2">
              </div>
              <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="Tiny Dream 3">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h2 class="card-title">Tiny Dream</h2>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Nr. Persoane:</strong> 2</li>
              <li class="list-group-item"><strong>Preț / Noapte:</strong> 250 Ron</li>
              <li class="list-group-item"><strong>Facilități:</strong></li>
              <li class="list-group-item">Pat king-size confortabil</li>
              <li class="list-group-item">Baie privată cu duș cald</li>
              <li class="list-group-item">Terasă privată cu vedere la natură</li>
              <li class="list-group-item">Aer condiționat și încălzire centrală</li>
              <li class="list-group-item">Wi-Fi gratuit și TV inteligent</li>
              <li class="list-group-item">Mini-frigider și ceainic electric</li>
            </ul>
            <a href="http://localhost/prglamping/admin/rezervare.php" class="btn btn-primary mt-3">Rezervă Acum</a>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../images/tiny_dream.jpg" class="d-block w-100" alt="Tiny Dream 1">
              </div>
              <div class="carousel-item">
                <img src="../images/tiny_dream2.jpg" class="d-block w-100" alt="Tiny Dream 2">
              </div>
              <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="Tiny Dream 3">
              </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h2 class="card-title">Tiny Revolution</h2>
            <ul class="list-group list-group-flush">
              <li class="list-group-item"><strong>Nr. Persoane:</strong> 2</li>
              <li class="list-group-item"><strong>Preț / Noapte:</strong> 199 Ron</li>
              <li class="list-group-item"><strong>Facilități:</strong></li>
              <li class="list-group-item">Pat king-size confortabil</li>
              <li class="list-group-item">Baie privată cu duș cald</li>
              <li class="list-group-item">Terasă privată cu vedere la natură</li>
              <li class="list-group-item">Aer condiționat și încălzire centrală</li>
              <li class="list-group-item">Wi-Fi gratuit și TV inteligent</li>
              <li class="list-group-item">Mini-frigider și ceainic electric</li>
            </ul>
            <a href="http://localhost/prglamping/admin/rezervare.php" class="btn btn-primary mt-3">Rezervă Acum</a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
  include '../admin/includes/footer.php'
  ?>