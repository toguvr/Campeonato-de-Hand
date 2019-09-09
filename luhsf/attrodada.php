<?php
include "head.php";

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

    <center>
    <section class="ftco-section">
         <div class="col-md-5 sidebar">
           
              <h2 class="mb-4">Atualizar rodadas</h2>
         <div class="sidebar-box">

              <table class="table table-league">






 
    
  

   
   
  <?php


$id=$_POST["id"];
$rolou=$_POST["rolou"];
$rodada=$_POST["rodada"];
$local=$_POST["local"];
$data=$_POST["data"];

$sql= "UPDATE `rodadas` SET `rodada`=$rodada,`ocorreu`=$rolou,`local`='$local',`data`='$data' WHERE `id`=$id"; 
$res=mysqli_query($con,$sql);
$linhas=mysqli_affected_rows($con);

if($linhas == 1){
echo "<div class='alert alert-success' role='alert'>
 <center>Alteração Gravada.</center>
</div>";
}else{
  echo "<div class='alert alert-danger' role='alert'>
 <center>Algo deu errado.</center>
</div>";
}

mysqli_close($con)
?>

<a href="rodadaatt.php?rodada=$rodada">voltar</a>

</table></div></div></section></center>

		
		<?php
    include "foot.php";
    ?>