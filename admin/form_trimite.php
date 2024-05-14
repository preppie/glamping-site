<?php
include '../conectare.php'
?>


<?php
// Űrlap adatok fogadása

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $mesaj = $_POST['mesaj'];


    $sql = "INSERT INTO contact_mesaje (nume, email, mesaj) VALUES ('$nume', '$email', '$mesaj')";
    // echo mysqli_query($cnx, $sql);
    if (mysqli_query($cnx, $sql)) {
        echo "Az üzenet sikeresen elküldve.";
    } else {
        echo "Hiba: " . $sql . "<br>" . mysqli_error($cnx);
    }
    // echo mysqli_error($cnx);
}

mysqli_close($cnx);
?>

<!--  -->