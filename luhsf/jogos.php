<!DOCTYPE html>
<?php
include "head.php";

if(isset($_GET['rodada']))
{

?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Jogos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Jogos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

      <?php

  $rodada=$_GET["rodada"];

  $sql1="SELECT * FROM `rodadas` where `rodada`=$rodada";


$res1=mysqli_query($con,$sql1);


while ($reg1=mysqli_fetch_row($res1)) {
  $rodada=$reg1[1];
  $data=date("d/m/Y H:i",strtotime($reg1[4]));
  $local=$reg1[3];


};

	?>
		
		
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class='col-md-7'>
	          <div class='heading-section ftco-animate'>
	          	<span class='subheading'>LUHSF</span>

	           <?php echo "<h2 class='mb-4'>Rodada $rodada </h2>"; ?>
	          </div>
	          <?php
	          	
$sql="SELECT * FROM jogos JOIN tb_campeonato as times1 on jogos.time1=times1.id JOIN tb_campeonato as times2 on jogos.time2=times2.id WHERE jogos.rodada= $rodada";


$res=mysqli_query($con,$sql);



while ($reg=mysqli_fetch_row($res)) {
	$time1=$reg[7];
	$placar1=$reg[2];
	$placar2=$reg[3];
	$time2=$reg[18];
	$rodada=$reg[5];
	$img1=$reg[8];
	$img2=$reg[19];

	//parei aqui
	

	          echo "<div class='scoreboard mb-5 mb-lg-3'>
	          	<div class='divider text-center'><span> Rodada $rodada ($local - $data)</span></div>
	          	

	          	<div class='d-sm-flex mb-4'>
		          	<div class='sport-team d-flex align-items-center'>
		          			<div class='img logo' style='background-image: url(imagens/$img1);'></div>
									<div class='text-center px-1 px-md-3 desc'>
										<h3 class='score'><span>$placar1</span></h3>
										<h4 class='team-name'>$time1</h4>
									</div>
		          	</div>
		          	<div class='sport-team d-flex align-items-center'>
	          			<div class='img logo order-sm-last' style='background-image: url(imagens/$img2);'></div>
									<div class='text-center px-1 px-md-3 desc'>
										<h3 class='score'><span>$placar2</span></h3>
										<h4 class='team-name'>$time2</h4>
									</div>
		          	</div>
		          
	          	</div>
	          	
	          </div>";
	    
	          }?>

	          
	          <div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                
		                <li><a href="jogos.php?rodada=1">1</a></li>
		                <li><a href="jogos.php?rodada=2">2</a></li>
		                <li><a href="jogos.php?rodada=3">3</a></li>
		                <li><a href="jogos.php?rodada=4">4</a></li>
		                <li><a href="jogos.php?rodada=5">5</a></li>
		                <li><a href="jogos.php?rodada=6">6</a></li>
		                <li><a href="jogos.php?rodada=7">7</a></li>
		                <li><a href="jogos.php?rodada=8">8</a></li>
		                <li><a href="jogos.php?rodada=9">9</a></li>
		                
		              </ul>
		            </div>
		          </div>
		        </div>
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
	            <h2 class="mb-4">Artilheiros</h2>
	            <div class="row">

<?php
$sql="SELECT * FROM `jogadores` ORDER BY `jogadores`.`gols` DESC LIMIT 4";


$res=mysqli_query($con,$sql);


?>

	            	
<?php

while ($reg=mysqli_fetch_row($res)) {
	$time=$reg[1];
	$jogador=$reg[2];
	$img=$reg[3];
	$gols=$reg[4];
			    echo"				<div class='col-md-6 top-score pb-4 mb-1'>
			    <div class='img' style='background-image: url(imagens/$img);'></div>
			    				<div class='text text-center'>
			    					<h3 class='mb-0'>$jogador</h3>
			    					<span class='score'>Gols : $gols</span>
			    				</div>

		    				</div>";}?>
		    				

	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>


<?php
include"foot.php";
    
  }
else
{
 
 $sqlr="SELECT * FROM `rodadas` ORDER BY `rodadas`.`ocorreu` ASC, `rodada` ASC limit 1";


$resr=mysqli_query($con,$sqlr);


while ($regr=mysqli_fetch_row($resr)) {
	  $rodadar=$regr[1];

	  header ("location: jogos.php?rodada=$rodadar");

};



}?>

  <!-- loader -->
