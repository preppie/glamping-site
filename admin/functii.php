<?php
include 'sesiune.php';
$functii_active = ' class="active"';
$home_active = ' class="active"';
// include 'header.php'; 
?>

<?php
include('includes/admin_header.php');
?>



<main id="main">
  <div class="container">
    <h2 class="text-center" style="padding-top: 120px;">Tabelul <em>functii</em></h2>
  </div>
  <div class="container" style="width: 500px;">
    <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6">
      <thead>
        <tr>
          <th scope="col">Nr. crt.</th>
          <th scope="col">Funcție</th>
          <th scope="col" class="text-center">Operații</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $interogare = "SELECT * FROM functie ORDER BY functie";
        $linii = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
        $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
        while ($rez = mysqli_fetch_assoc($linii)) :
        ?>
          <tr>
            <th scope="row"><?= $i ?></th>
            <td class="w-70"><?= $rez['functie'] ?></td>
            <td class="w-30 text-center">
              <a href="functii.php?editez=<?= $rez['cod_functie'] ?>">
                <i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></a>
              <a href="formulare/stergFunctie.php?sterg=<?= $rez['cod_functie'] ?>">
                <i class="fa fa-trash fa-lg" aria-hidden="true"></i></a>
            </td>
          </tr>

        <?php
          $i++;
        endwhile;
        ?>
      </tbody>
    </table>
  </div>
  <?php
  $editez = $_GET["editez"];
  if ($editez) { ?>

    <?php
    //  Caut functia care trebuie editata
    $caut = "SELECT * FROM functie where cod_functie = $editez";
    $rezultat = mysqli_query($cnx, $caut);
    $rez = mysqli_fetch_assoc($rezultat);
    ?>
    <div class="container mt-5" style="width: 500px;">
      <form method="post" action="formulare/editFunctie.php">
        <input type="hidden" name="editez" value="<?= $editez ?>">
        <div class="form-group">
          <label for="functia">Funcția:</label>
          <input class="form-control" id="functia" name="functia" type="text" value="<?= $rez['functie'] ?>">
        </div>

        <button type="submit" class="btn btn-secondary mt-3 mb-2 col-xs-3">Modifică!</button>
      </form>
    </div>

  <?php } else { ?>

    <div class="container mt-5" style="width: 500px;">
      <form method="post" action="formulare/adaugFunctie.php">
        <div class="form-group">
          <label for="functia">Funcția:</label>
          <input class="form-control" id="functia" name="functia" type="text">
        </div>

        <button type="submit" class="btn btn-secondary mt-3 mb-2 col-xs-3">Adaugă!</button>
      </form>
    </div>

  <?php }
  ?>

</main>

<?php
include 'includes/footer.php';
?>
</div>

</body>

</html>