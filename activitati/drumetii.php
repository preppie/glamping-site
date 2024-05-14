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
    .card-img-top {
        height: 400px;
        /* Setează înălțimea dorită */
        object-fit: cover;
        /* Asigură că imaginea este tăiată pentru a se potrivi în spațiul specificat */
    }
</style>

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
                    <img src="../images/tur_ebikes1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-inline d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/drumetii1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-inline d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/drumetii3.jpg" class="d-block w-100" alt="...">
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


        <div class="container">
            <h1 class="text-center mt-5">Descoperă Frumusețea Naturală cu Traseele Noastre de Drumeții</h1>
            <p class="lead text-center">Pornește într-o aventură de explorare și descoperă peisajele spectaculoase și ascunse din jurul Lacului Bezid. Traseele noastre de drumeții te vor purta prin păduri dese, văi adânci și vârfuri montane, oferindu-ți o experiență de neuitat în mijlocul naturii sălbatice.</p>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <img src="../images/drumetii2.jpg" class="card-img-top" alt="Munte">
                        <div class="card-body">
                            <h5 class="card-title">Descoperă Vârfurile Înalte</h5>
                            <p class="card-text">Urcă pe vârfuri impresionante și admira peisajele spectaculoase din înălțimi. Cu trasee potrivite pentru toate nivelurile de experiență, vei avea parte de aventuri uimitoare în mijlocul naturii înalte.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../images/drumetii_card.jpg" class="card-img-top" alt="Pădure">
                        <div class="card-body">
                            <h5 class="card-title">Explorare în Pădurea Adâncă</h5>
                            <p class="card-text">Pătrunde în inima pădurii și descoperă secretele ascunse ale naturii. Cu trasee pline de mister și magie, vei fi captivat de frumusețea și diversitatea pădurii.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="rau.jpg" class="card-img-top" alt="Râu">
                        <div class="card-body">
                            <h5 class="card-title">Rătăciri pe Malul Râului</h5>
                            <p class="card-text">Urmărește cursul limpede al râului și bucură-te de liniștea și frumusețea malurilor sale. Cu trasee care te duc prin peisaje idilice, vei avea parte de aventuri pline de farmec și relaxare.</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="mt-5">Rezervă Acum</h2>
            <p>Pregătește-te pentru o experiență de neuitat în mijlocul naturii sălbatice cu traseele noastre de drumeții la Lacul Bezid! Rezervă acum și pregătește-te să te îndrepți spre noi orizonturi și descoperiri uluitoare.</p>
            <p class="text-center"><a href="#" class="btn btn-primary btn-lg">Rezervă Acum</a></p>
        </div>


    </div>
    <?php
    include '../admin/includes/footer.php';
    ?>
</body>

</html>