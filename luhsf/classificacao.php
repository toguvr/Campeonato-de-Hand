<?php
include "head.php";
?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Tabela do Campeonato</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Classificação <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		 <center>
    <section class="ftco-section">
         <div class="col-md-5 sidebar">
         <div class="sidebar-box">
    <h2 class="mb-4">Classificação Liga Universitária</h2>
              <table class="table table-league">

    
  
  <thead> 
    <tr>
      <th>Equipe</th>
      <th>P</th>
      <th>J</th>
     
      <th>V</th>
      <th>E</th>
      <th>D</th>
      <th>GP</th>
      <th>GC</th>
       <th>SG</th>
      
    </tr>
  </thead>
   
   
  <?php
  $sql="SELECT * FROM `tb_campeonato` ORDER BY `tb_campeonato`.`pontos` DESC, `vitoria` DESC, `saldo de gol` DESC, `Gols Pro` DESC";
$i=1;
$res=mysqli_query($con,$sql);
while ($i <= 10) {
while ($reg=mysqli_fetch_array($res)) {
  $time=$reg["time"];
  $imagem=$reg[2];
  $jogos=$reg[3];
  $vitoria=$reg[4];
  $empate=$reg[5];
  $derrota=$reg[6];
  $golp=$reg[7];
  $gols=$reg[8];
  $saldogol=$reg[9];
  $pontos=$reg[10];

  
  
    # code...
  
    # code...
  
  echo "  <tbody> 
     <tr>
        <td>$i"."º <img src='imagens/$imagem' style='width: 25 px; height: 25px; line-height: 32px;
    text-align: center; border-radius:50%;
    margin: 0 5px 0 0;
    position: relative;''>"."$time</td>  
        <td>$pontos</td>
        <td>$jogos</td> 
         
        <td>$vitoria</td> 
        <td>$empate</td>  
        <td>$derrota</td>  
        
        <td>$golp</td> 
        <td>$gols</td> 
        <td>$saldogol</td>
           
       
      </tr>
       </tbody>";
  
  $i++;
  }
}
?>
</div>
</div>
</table>
    </section></center>
		
		<?php
    include "foot.php";
    ?>