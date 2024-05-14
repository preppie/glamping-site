<?php
include 'sesiune.php';
$rezervari_active = ' class="active"';
$home_active = ' class="active"';
?>

<?php
include('includes/admin_header.php');
?>



<main id="main">
  <div class="container">
    <h2 class="text-center" style="padding-top: 120px;">Tabelul <em>Rezervari</em></h2>

    <div class="container">
      <table class="table mt-5" style="border-bottom: 2px solid #DEE2E6">
        <thead>
          <tr>
            <th scope="col">Nr. Crt</th>
            <th scope="col">Nr. Rezervare</th>
            <th scope="col">Nume</th>
            <th scope="col">Prenume</th>
            <th scope="col">Adresa</th>
            <th scope="col">Localitate</th>
            <th scope="col">Nr. Tel</th>
            <th scope="col">email</th>
            <th scope="col">Check In</th>
            <th scope="col">Check Out</th>
            <th scope="col">Tip Cazare</th>
            <th scope="col">Confirmare</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $interogare = "SELECT * FROM rezervari ORDER BY cod_rezervare";
          $linii = mysqli_query($cnx, $interogare) or die("Eroare: " . mysqli_error($cnx));
          $i = 1;  //  $i este un contor care va fi incrementat în ciclul while
          while ($rez = mysqli_fetch_assoc($linii)) :
          ?>
            <tr>
              <th scope="row"><?= $i ?></th>
              <td class="w-70"><?= $rez['cod_rezervare'] ?></td>
              <td class="w-70"><?= $rez['nume'] ?></td>
              <td class="w-70"><?= $rez['prenume'] ?></td>
              <td class="w-70"><?= $rez['adresa'] ?></td>
              <td class="w-70"><?= $rez['localitate'] ?></td>
              <td class="w-70"><?= $rez['nr_tel'] ?></td>
              <td class="w-70"><?= $rez['email'] ?></td>
              <td class="w-70"><?= $rez['checkInDate'] ?></td>
              <td class="w-70"><?= $rez['checkOutDate'] ?></td>
              <td class="w-70"><?= $rez['tip_cazare'] ?></td>
              <td>
                <?php
                if ($rez['confirmat'] == 0) {
                ?>
                  <a href="formulare/confRez.php?cod_rezervare=<?= $rez['cod_rezervare'] ?>">
                    <i class="fa fa-solid fa-spinner" aria-hidden="true"></i>
                    <p>Procesare</p>
                  </a>
                <?php } else {
                ?>
                  <i class="fa fa-check fa-md" aria-hidden="true">
                    <p>Confirmat</p>
                  </i>
                <?php
                } ?>
              </td>
            </tr>

          <?php
            $i++;
          endwhile;
          mysqli_close($cnx);
          ?>
        </tbody>
      </table>
    </div>

</main>


<!-- FOOTER -->

<?php
include 'includes/footer.php';
?>

<!-- END OF FOOTER -->

</div>

</body>

</html>