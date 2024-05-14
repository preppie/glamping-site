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


    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
      <div class="container-fluid">
        <a class="navbar-brand" href="../index.php">PREPPY GLAMPING</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="http://localhost/prglamping/admin/index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/prglamping/admin/admin_rezervari.php">Rezervari</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/prglamping/admin/functii.php">Functii</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cazari
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Tiny Dream</a></li>
                <li><a class="dropdown-item" href="#">Tiny Revolution</a></li>
                <li><a class="dropdown-item" href="#">Tiny Stuff</a></li>
                <li><a class="dropdown-item" href="#">Tiny Home</a></li>
                <li><a class="dropdown-item" href="#">Tiny Cozy</a></li>
              </ul>
            </li>
          </ul>
          <span class="navbar-text mx-auto" style="color: black;">
            <?= $nume ?>
          </span>
        </div>
      </div>
    </nav>