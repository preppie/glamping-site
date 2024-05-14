<?php 
include  'admin/header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PREPPIE GLAMPING</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <header>
    <h3 class="py-3 px-3">Despre noi</h3>
    <hr>
  </header>

<!-- DESPRE NOI -->

<div class="container text-justify">
  <div class="row">
    <div class="col-6">
      <section>
        <h3 class="py-3">Experiența noastră în glamping</h3>
        <p>Glamping-ul nostru oferă o experiență unică în mijlocul naturii, combinând confortul și luxul cu frumusețea naturii înconjurătoare.</p>
        <p>Echipa noastră pasionată și dedicată lucrează pentru a asigura o experiență memorabilă pentru toți oaspeții noștri.</p>
        <p>Ne mândrim cu facilitățile noastre de top, serviciile excelente și atenția noastră la detalii.</p>
        <p>Indiferent dacă ești în căutarea unei evadări romantice sau a unei aventuri în aer liber cu familia și prietenii, suntem aici pentru a-ți oferi o experiență de neuitat în mijlocul naturii.</p>
      </section>
  
      <section>
        <h3 class="mt-5 mb-3">Echipa noastră</h3>
        <p>Echipa noastră este formată din oameni dedicați și pasionați de glamping.</p>
        <p>Avem experți în ospitalitate, bucătari talentați și ghizi profesioniști care sunt pregătiți să-ți ofere cele mai bune servicii și experiențe în glamping-ul nostru.</p>
        <p>Suntem aici pentru a ne asigura că fiecare oaspete se simte ca acasă și că pleacă cu amintiri de neuitat.</p>
      </section>
      <p>Pentru mai multe informații și rezervări, contactați-ne la adresa de e-mail: <a href="mailto:contact@glamping.com">contact@glamping.com</a></p>
    </div>

    <!-- END OF DESPRE NOI -->

    <!-- CONTACT FORM -->

    <div class="col-6">
    <div class="container">
    <h2 class="py-3">Contacteaza-ne</h2>
    <form action="admin/form_trimite.php" method="POST">
        <div class="mb-3">
            <label for="nume" class="form-label">Nume</label>
            <input type="text" class="form-control" id="nume" name="nume" placeholder="Numele tau" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresa E-mail</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="mail@mail.com"required>
        </div>
        <div class="mb-3">
            <label for="mesaj" class="form-label">Mesajul tau</label>
            <textarea class="form-control" id="mesaj" name="mesaj" rows="5" placeholder="Mesajul tau aici"required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Trimite</button>
    </form>
    </div>
    </div>

      <!-- END OF CONTACT FORM -->

      
  </div>

      <?php
      include 'admin/includes/footer.php';
      ?>
</div>
</body>
</html>
