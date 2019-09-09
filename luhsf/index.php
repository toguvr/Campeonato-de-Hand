
    
<?php
include "head.php";
?>


    <div class="hero-wrap js-fullheight" style="background-image: url('images/trevo2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Liga Universitária de Handebol do Sul Fluminense</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A liga pensada e criada para você e seu time crescerem juntos.</p>
						<p class="d-flex align-items-center">
							<a href="classificacao.php" class="icon-video popup-vimeo d-flex justify-content-center align-items-center mr-3">
    						<span class="ion-ios-play"></span>
    					</a>
    					<span class="watch">Classificação</span>
						</p>
          </div>
        </div>
      </div>
    </div>




    <section class="ftco-section ftco-no-pb ftco-no-pt">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">
						<div class="game-wrap-1 ftco-animate p-4">
							<div class="row p-2">
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
									<div class="text d-flex">
										<div class="team-logo d-flex">
                      <?php 
                       $sqlr="SELECT * FROM `rodadas` ORDER BY `rodadas`.`ocorreu` ASC, `rodada` ASC limit 1";


$resr=mysqli_query($con,$sqlr);


while ($regr=mysqli_fetch_row($resr)) {
    $rodadar=$regr[1];}

$num=rand(1,5);



                      $sql="SELECT * FROM jogos JOIN tb_campeonato as times1 on jogos.time1=times1.id JOIN tb_campeonato as times2 on jogos.time2=times2.id WHERE jogos.rodada= $rodadar limit $num";



$res=mysqli_query($con,$sql);



while ($reg=mysqli_fetch_row($res)) {
  $time1=$reg[7];
  $placar1=$reg[2];
  $placar2=$reg[3];
  $time2=$reg[18];
  $rodada=$reg[5];
  $img1=$reg[8];
  $img2=$reg[19];} ?>
											<div class="img" style="background-image: url(imagens/<?=$img1?>);"></div>
											<div class="img img-2" style="background-image: url(imagens/<?=$img2?>);"></div>
										</div>
										<div class="team-name pl-3">
											<h3><span><?=$time1?></span> <span><?=$time2?></span></h3>
										</div>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-3">
									<div class="text">
										<div class="img"></div>
										<h3 class="league">Liga Universitária de Handebol</h3>
										<span>Próxima Rodada</span>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-4">
									<div class="text">
										<div id="timer" class="d-flex mb-0">
                    <?php 



 $meses=Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
                     $sql1="SELECT *, DATE_FORMAT(data, '%Y-%m-%dT%H:%i') AS custom_date FROM `rodadas` where `rodada`=$rodada";

$res1=mysqli_query($con,$sql1);


while ($reg1=mysqli_fetch_row($res1)) {
  $rodada=$reg1[1];
  $dia=date("d",strtotime($reg1[5]));;
  $mes=date("m",strtotime($reg1[5]))*1;;
  $ano=date("Y",strtotime($reg1[5]));;
    $hora=date("H",strtotime($reg1[5]));;
      $min=date("i",strtotime($reg1[5]));;
            $seg=date("s",strtotime($reg1[5]));;
 


  };

  ?>

<script>
function makeTimer() {

    var endTime = new Date("<?=$dia?> <?=$meses[$mes]?> <?=$ano?> <?=$hora?>:<?=$min?>:<?=$seg?> GMT+01:00");      
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    var days = Math.floor(timeLeft / 86400); 
    var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
    var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
    var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

    if (hours < "10") { hours = "0" + hours; }
    if (minutes < "10") { minutes = "0" + minutes; }
    if (seconds < "10") { seconds = "0" + seconds; }

    $("#days").html(days + "<span>Dias</span>");
    $("#hours").html(hours + "<span>Horas</span>");
    $("#minutes").html(minutes + "<span>Minutos</span>");
    $("#seconds").html(seconds + "<span>Segundos</span>");   

}

setInterval(function() { makeTimer(); }, 1000);
</script>



										  <div class="time pl-3" id="days"></div>
										  <div class="time pl-3" id="hours"></div>
										  <div class="time pl-3" id="minutes"></div>
										  <div class="time pl-3" id="seconds"></div>
										</div>
									</div>
								</div>
								<div class="col-md-6 pb-4 pb-lg-0 col-lg-2">
									<div class="text">
										<p class="mb-0"><a href="jogos.php" class="btn btn-primary py-3">Jogos</a></p>
									</div>
								</div>
							</div>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>
		
		

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          
            <h2>Parceiros</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="https://lojastrevo.com.br" class="block-20" style="background-image: url('images/trevo.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              	
              		<div class="two">
              			<a href="https://lojastrevo.com.br"><h3 class="yr">Lojas Trevo</h3></a>
             
              		</div>
              	</div>
                <span class="heading"><a href="https://lojastrevo.com.br">As carteiras Trevo são as mais finas e leves que você já viu!</a></span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/trevo.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">07</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/trevo.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">07</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/trevo.jpg');">
              </a>
              <div class="text mt-3 float-right d-block">
              	<div class="d-flex align-items-center p-2 pr-3 mb-4 topp">
              		<div class="one">
              			<span class="day mr-1">06</span>
              		</div>
              		<div class="two">
              			<span class="yr">2019</span>
              			<span class="mos">March</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
<?php
include "foot.php";
?>