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
            <h1 class="mb-3 bread">Alterar Jogo</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Alterar Jogos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <center>
    <section class="ftco-section">
         <div class="col-md-5 sidebar">
            <?php   $rodada=$_GET["rodada"]; ?>
              <h2 class="mb-4">Alterar rodada <?=$rodada?></h2>
         <div class="sidebar-box">

              <table class="table table-league">






 
    
  

   
   
  <?php









  $sql1="SELECT * FROM `rodadas` where `rodada`=$rodada";


$res1=mysqli_query($con,$sql1);


while ($reg1=mysqli_fetch_row($res1)) {
  $rodada=$reg1[1];
  $rolou=$reg1[2];
  $data=date("d/m/Y",strtotime($reg1[4]));
  $local=$reg1[3];

      echo"<thead> 
    <tr>
      
      <th>time1</th>
      <th>placar1</th>
      <th>placar2</th>
      <th>time2</th>
      
      <th>status</th>
    </tr>
  </thead>";
};

  $sql="SELECT * FROM jogos JOIN tb_campeonato as times1 on jogos.time1=times1.id JOIN tb_campeonato as times2 on jogos.time2=times2.id WHERE jogos.rodada= $rodada";


$res=mysqli_query($con,$sql);



while ($reg=mysqli_fetch_row($res)) {
  $id=$reg[0];
  $time1=$reg[7];
  $placar1=$reg[2];
  $placar2=$reg[3];
  $time2=$reg[18];
  $rodada=$reg[5];


  
  
 
  
  echo " 
       <tbody> 
     <tr>
   <form name='alterartime' method='get' action='alterajogo.php'>
   <input type='hidden' name='rodada' value= '$rodada'>
   <input type='hidden' name='id' value= '$id' readonly='readonly'>
        <td><input type='hidden' name='time1' value= '$time1' readonly='readonly'>$time1</td>
         <td><input type='number' name='placar11' value= '$placar1'>
         <input type='hidden' name='placar1' value= '$placar1'> </td>
          
          <td><input type='hidden' name='placar2' value= '$placar2'>
          <input type='number' name='placar22' value= '$placar2'> </td>
          <td><input type='hidden' name='time2' value= '$time2' readonly='readonly'>$time2</td>  



         <td><input type='submit' class='btn btn-danger' value='alterar'></td>
       </form>
      </tr>
       </tbody>";

}


?>

</table>
<?php  
echo "<form name='rodada' method='get' action='#'>

<label>Rodada : </label>
    <select type='text' name='rodada'>";
      
      $sql='SELECT DISTINCT rodada from jogos';
      $res=mysqli_query($con,$sql);
      while ($vreg=mysqli_fetch_row($res)) {
        $rodada=$vreg[0];
      
        echo "<option>$rodada</option>";
      }

 echo" 
  <input type='submit' value='Alterar'>
  </form>";    ?>

<button><a href="addjogo.php"> Inserir partida </a></button>   </div>
</div> </section></center>
<?php

 }
else
{
    echo " <center><section class='ftco-section'>
 <div class='container'><form name='rodada' method='get' action='#'>

<label>Rodada : </label>
    <select type='number' name='rodada'>";
      
      $sql='SELECT DISTINCT rodada from jogos';
      $res=mysqli_query($con,$sql);
      while ($vreg=mysqli_fetch_row($res)) {
        $rodada=$vreg[0];
      
        echo "<option>$rodada</option>";
      }

 echo" </br>


  </br>
  <input class='btn btn-outline-success' type='submit' value='Confirmar'>
  </form></div></div></center>";    
} ?>
</body>
</html>

  


 </section>
</center>
		
		<?php
    include "foot.php";
    ?>