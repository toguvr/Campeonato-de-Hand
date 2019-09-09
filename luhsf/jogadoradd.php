<?php
include "head.php";

?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Adicionar Jogador</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Adicionar Jogador <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <center>
    <section class="ftco-section">
         <div class="col-md-5 sidebar">
           
              <h2 class="mb-4">Adicionar Jogador</h2>
         <div class="sidebar-box">

              <table class="table table-league">





  <form method='post' enctype='multipart/form-data' action='addjogador.php'>
    <label>Time: </label>
    <select type="text" name="time">
      <?php
      $sql="SELECT * from tb_campeonato";
      $res=mysqli_query($con,$sql);
      while ($vreg=mysqli_fetch_row($res)) {
        $time1=$vreg[1];
      
        echo "<option>$time1</option>";
      }
?>

    </select>
</br>

    <label>Jogador :</label>
    <input type="text" name="nome">
    </br>
    <label>Foto :</label>
        <input name='arquivo' type='file' />
</br>
<label>Gols : </label>
    <input type="number" name="gols">
  </br>


  </br>
  <input class="btn btn-outline-success" type="submit" value="Inserir">
  <input class="btn btn-outline-danger" type="reset" value="limpar">
  </form>


</table></div></div></section></center>


		
		<?php
    include "foot.php";
    ?>