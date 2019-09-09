<!DOCTYPE html>
<?php
include "head.php";


?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Jogos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Artilheiros <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    
		
		
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class='col-md-7'>
	          <div class='heading-section ftco-animate'>
	          	<span class='subheading'>LUHSF</span>

	           <h2 class='mb-4'> Top 10 Artilheiros </h2>
	          </div>
	          <?php
	          	
$sql="SELECT * FROM `jogadores` ORDER BY `jogadores`.`gols` DESC LIMIT 10";


$res=mysqli_query($con,$sql);



while ($reg=mysqli_fetch_row($res)) {
	$time=$reg[1];
	$jogador=$reg[2];
	$img=$reg[3];
	$gols=$reg[4];
	 
	//parei aqui
	

	          echo "<div class='scoreboard mb-5 mb-lg-3'>
	         
	          	<div class='d-sm-flex mb-4'>
		          	<div class='sport-team d-flex align-items-center'>
		          			<div class='img logo' style='background-image: url(imagens/$img);'></div>
									<div class=' px-1 px-md-3 desc'>
										<h3 class='mb-3 team-name'><span>$jogador</span></h3>
										<h3 class='team-name'>Gols : $gols</h3>
										<div class='team-name'><span>$time</span></div>
									</div>
		          	</div>
		  
		          
	          	</div>
	          	
	          </div>";}?>

	          
	          
	        </div>
					<div class="col-md-5 sidebar">
						
						<div class="sidebar-box">
	            <h2 class="mb-4">Tabela da Liga</h2>
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
        <td>$i"."º <img src='imagens/$imagem' style='border-radius: 50%; width: 25 px; height: 25px; line-height: 32px;
    text-align: center;
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
</table>
						</div>
						<div class="sidebar-box">
	            
						</div>
					</div>
				</div>
			</div>
		</section>


<?php
include"foot.php";
    

?>

  <!-- loader -->
