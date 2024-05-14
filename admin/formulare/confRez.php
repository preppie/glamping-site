<?php
session_start();
if (isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $cod = $_REQUEST['cod_rezervare'];
  include '../../conectare.php';
  $comanda = "UPDATE rezervari SET rezervari.confirmat = '1' WHERE cod_rezervare = $cod;";
  echo $comanda;
  try {
    $res = mysqli_query($cnx, $comanda);
    mysqli_close($cnx);
  } catch (exception $e) {
    echo "Exception: ";
    mysqli_error($cnx);
    echo $e;
  }
  //  Reincarc "functii.php"
  header('Location: ../admin_rezervari.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
