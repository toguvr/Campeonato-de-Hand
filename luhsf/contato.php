<?php
include "head.php";

if(isset($_POST['email']))
{?>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
   
   <?php if (mail($_POST['email'], $_POST['assunto'], $_POST['msg'], "From:augustotf93@gmail.com")){ 

   echo"<div class='alert alert-succsses' role='alert'>
 <center> Email Enviado!</center>
</div></br><a href='contato.php'>Voltar</a>";
          }else{
echo "<div class='alert alert-danger' role='alert'>
 <center> email não enviado!</center>
</div>";
          }?>
          </div>

          <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>

 <?php }
else
{
?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Atualizar rodadas</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Atualizar rodadas <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form action="#" method="post" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="nome" placeholder="Seu Nome"  required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email"  required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="assunto" placeholder="Assunto"  required="required">
              </div>
              <div class="form-group">
                <textarea name="msg" id="" cols="30" rows="7"  class="form-control" placeholder="Menssagem"  required="required"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
            <div id="map" class="bg-white"></div>
          </div>
        </div>
      </div>
    </section>
<?php }; ?>
    
    <?php
    include "foot.php";
    ?>