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









  $sql1="SELECT *, DATE_FORMAT(data, '%Y-%m-%dT%H:%i') AS custom_date FROM `rodadas`";


$res1=mysqli_query($con,$sql1);

      echo"<thead> 
    <tr>
      
      <th>Rodada</th>
      <th>Ocorrencia</th>
      <th>Local</th>
      <th>Data</th>
      
      <th>status</th>
    </tr>
  </thead>";

while ($reg1=mysqli_fetch_row($res1)) {
   $id=$reg1[0];
  $rodada=$reg1[1];
  $rolou=$reg1[2];
  $data=$reg1[5];
  $local=$reg1[3];

       echo"<tbody> 
     <tr>
   <form name='alterartime' method='post' action='attrodada.php'>
   <input type='hidden' name='id' value= '$id' readonly='readonly'>
   <td><input type='hidden' name='rodada' value= '$rodada'>$rodada</td>
        <td><input type='number' name='rolou' value= '$rolou'></td>
         <td><input type='text' name='local' value= '$local'></td>
         <td><input type='datetime-local' name='data' value= '$data'> </td>
         <td><input type='submit' class='btn btn-danger' value='alterar'></td>
       </form>
      </tr>
       </tbody>";

}


?></table></div></div></section></center>


		
		<?php
    include "foot.php";
    ?>