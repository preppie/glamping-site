<?php
session_start();
if(isset($_SESSION['logat']) && $_SESSION['logat'] == true) {
  $cod = $_POST['editez'];
  $corecta = $_POST['functia'];
  include '../../conectare.php';
  $comanda = "UPDATE functie SET functie.functie = '$corecta' WHERE cod_functie = $cod;";
  try {
    $res = mysqli_query($cnx, $comanda);
    mysqli_close($cnx);
  } catch (exception $e) {
    echo "Exception: ";
    echo $e;
  }
  //  Reincarc "functii.php"
  header('Location: ../functii.php');
} else {
  //  Nu este logat!
  header('Location: ../index.php');
}
?>
