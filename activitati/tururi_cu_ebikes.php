<?php
include 'conectare.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activități cu Biciclete Electrice la Lacul Bezid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<?php
include '../admin/header.php';
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
                    <img src="../images/tur_ebikes1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-inline d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/tur_ebikes2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-inline d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/tur_ebikes3.jpg" class="d-block w-100" alt="...">
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
        <div class="container-md">
            <h2 class="text-center mt-5">Descoperă Frumusețea Naturii cu Biciclete Electrice la Lacul Bezid</h2>
            <p class="lead text-justify">Bucură-te de aventura bicicletelor electrice în mijlocul naturii pitorești a Lacului Bezid și împrejurimilor sale. Înconjurate de peisaje uimitoare și trasee naturale, aceste excursii cu biciclete electrice sunt o modalitate minunată de a te conecta cu natura și de a-ți petrece timpul în aer liber.</p>

            <h3 class="mt-5">Experiențe Memorabile</h3>
            <p class="lead text-justify">Închiriază una dintre bicicletele noastre electrice și pornește într-o călătorie plină de aventură prin peisajele magnifice ale Lacului Bezid. Indiferent dacă ești un începător sau un ciclist experimentat, avem trasee adecvate pentru toate nivelurile de experiență.</p>

            <h3 class="mt-5">Descoperă Frumusețea Naturală</h3>
            <p class="lead text-justify">Străbateți păduri umbroase, poteci montane și plimbă-te pe malurile pitorești ale lacului, toate cu ajutorul bicicletelor noastre electrice prietenoase cu mediul. Ia o pauză și admire peisajele spectaculoase sau oprește-te pentru o picnic relaxant în mijlocul naturii.</p>

            <h3 class="mt-5">Rezervă Acum</h3>
            <p class="lead text-justify">Planifică-ți următoarea aventură cu biciclete electrice la Lacul Bezid! Rezervă acum pentru a te asigura că vei avea parte de o experiență memorabilă în mijlocul naturii.</p>
            <p class="text-center"><a href="#" class="btn btn-primary btn-lg">Rezervă Acum</a></p>
        </div>


    </div>
    <?php
    include '../admin/includes/footer.php';
    ?>
</body>

</html>