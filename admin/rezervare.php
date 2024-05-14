<?php
include 'sesiune.php';
$rezervare_active = ' class="active"';
include 'header.php';
session_start();
?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
    
    <?php
    if(isset($_SESSION['status']))
  {
    echo "<h4>" .$_SESSION['status']."</h4>";
    unset($_SESSION["status"]);
  }
    ?>

    <div class="card mt-5">
        <div class="card-header">
            <h4>Date client</h4>
        

          <div class="card-body">

                <form action="formulare/salvareRezervare.php">
                  
                  <div class="form-group mb-3">
                    <label for="">Nume</label>
                    <input type="text" name="nume" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Prenume</label>
                    <input type="text" name="prenume" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Adresa</label>
                    <input type="text" name="adresa" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Localitate</label>
                    <input type="text" name="localitate" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Nr. Telefon</label>
                    <input type="text" name="nr_tel" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">eMail</label>
                    <input type="text" name="email" class="form-control">
                  </div>
                
                
               
      
        
            <h4 class=" mt-5 mb-4">Date rezervare</h4>
       
          

                
                  
                  <label for="exampleDataList" class="form-label">Tipul Cazarii</label>
                  <input type="text" name="tip_cazare" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Click pentru a selecta tipul cazarii." required>
                  <datalist id="datalistOptions">
                    <option value="Tiny Dream">
                    <option value="Tiny Revolution">
                    <option value="Tiny Stuff">
                    <option value="Tiny Home">
                    <option value="Tiny Cozy">
                  </datalist>

                  <div class="form-group mt-3 mb-3" aria-required="false">
                    <label for="">Check In</label>
                    <input type="date" name="checkin" class="form-control">
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Check Out</label>
                    <input type="date" name="checkout" class="form-control">
                  </div>
                  <!-- <div class="form-group mb-3">
                    <label for="">Localitate</label>
                    <input type="text" name="name" class="form-control" >
                  </div> -->
                  <div class="form-group mb-3">
                    <button type="submit" name="salvare_rezervare" class="btn btn-primary mt-5">
                      Trimite Rezervare
                    </button>
                  </div>
                
                </form>
          
          </div>
    
          </div>       
        </div>
  </div>
</div>


<?php
include 'includes/footer.php';
?>