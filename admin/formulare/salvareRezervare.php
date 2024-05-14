<?php
session_start();
$cnx = mysqli_connect("localhost","root","","pr_glamping");


if(isset($_REQUEST['salvare_rezervare']))
{
 
  $nume = $_REQUEST['nume'];
  $prenume = $_REQUEST['prenume'];
  $adresa = $_REQUEST['adresa'];
  $localitate = $_REQUEST['localitate'];
  $nr_tel = $_REQUEST['nr_tel'];
  $email = $_REQUEST['email'];
  $tip_cazare = $_REQUEST['tip_cazare'];
  $checkin = date('Y-m-d', strtotime($_REQUEST['checkin']));
  $checkout = $_REQUEST['checkout'];
  
  
  $query = "INSERT INTO rezervari (nume,prenume,adresa,localitate,nr_tel,email,tip_cazare,checkInDate,checkOutDate) VALUES ('$nume','$prenume','$adresa','$localitate','$nr_tel','$email','$tip_cazare','$checkin','$checkout')";
  
    // $query = "INSERT INTO clienti (nume,prenume,adresa,localitate,nr_tel,mail) VALUES ('$nume','$prenume','$adresa','$localitate','$nr_tel','$email')";
    echo $query;
    $query_run = mysqli_query($cnx,$query);
    if ($query_run) {
      echo "Query executed successfully.";
  } else {
      // Echo the error
      echo "Error: " . mysqli_error($cnx);
  }

    if($query_run)
    {
      $_SESSION['status'] = "Rezervarea trimisa cu succes.";
      header("Location: ../rezervare.php");
    }
}
