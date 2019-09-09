<?php

  include "conexao.php";
  $rodada=$_GET['rodada'];
$id=$_GET["id"];
$time1=$_GET["time1"];
$time2=$_GET["time2"];
$placar1=$_GET["placar1"];
$placar2=$_GET["placar2"];
$placar11=$_GET["placar11"];
$placar22=$_GET["placar22"];

//altera nos jogos o novo placar
$sql2= "UPDATE `jogos` SET `placar1`=$placar11,`placar2`=$placar22 WHERE `id`= $id";
//alterou o placar e o time1 segue ganhando ok
$sqlv1= "UPDATE `tb_campeonato` set `Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22' WHERE `time`= '$time1'"; 
$sqld2= "UPDATE `tb_campeonato` SET `Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11' WHERE `time`= '$time2'";

//alterou o placar e o time 2 segue ganhando ok
$sqlv2= "UPDATE `tb_campeonato` set `Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11' WHERE `time`= '$time2'"; 
$sqld1= "UPDATE `tb_campeonato` SET `Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22' WHERE `time`= '$time1'";

//alterou o placar e segue dando empate ok
$sqle1="UPDATE `tb_campeonato` SET `Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`+'$placar11'-'$placar1'+'$placar2'-'$placar22' WHERE `time`= '$time1'";
$sqle2="UPDATE `tb_campeonato` SET `Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`+'$placar22'-'$placar2'+'$placar1'-'$placar11' WHERE `time`= '$time2'";

//alterou o placar e com o novo resultado o time 2 passou a ganhar ok
$sqlv22= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`+1,`derrota`=`derrota`-1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`+2 WHERE `time`= '$time2'";
$sqld11="UPDATE `tb_campeonato` SET `vitoria`=`vitoria`-1, `derrota`=`derrota`+1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`-2 WHERE `time`= '$time1'";

//alterou o placar e com o novo resultado o time 1 passou a ganhar ok
$sqlv11= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`+1,`derrota`=`derrota`-1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`+2 WHERE `time`= '$time1'";
$sqld22="UPDATE `tb_campeonato` SET `vitoria`=`vitoria`-1, `derrota`=`derrota`+1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`-2 WHERE `time`= '$time2'";

//alterou um placar vazio para empate ok
$sqle11="UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar11',`Gols Sofridos`=`Gols Sofridos`+'$placar22',`saldo de gol`=`saldo de gol`+'$placar11'-'$placar22',`pontos`=`pontos`+1 WHERE `time`= '$time1'";
$sqle22="UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar22',`Gols Sofridos`=`Gols Sofridos`+'$placar11',`saldo de gol`=`saldo de gol`+'$placar22'-'$placar11',`pontos`=`pontos`+1 WHERE `time`= '$time2'";

//alterou placar vazio para vitoria time 2 ok
$sqlev22= "UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`vitoria`=`vitoria`+1,`Gols Pro`=`Gols Pro`+'$placar22',`Gols Sofridos`=`Gols Sofridos`+'$placar11',`saldo de gol`=`saldo de gol`+'$placar22'-'$placar11',`pontos`=`pontos`+2 WHERE `time`= '$time2'";
$sqled11="UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`derrota`=`derrota`+1,`Gols Pro`=`Gols Pro`+'$placar11',`Gols Sofridos`=`Gols Sofridos`+'$placar22',`saldo de gol`=`saldo de gol`+'$placar11'-'$placar22' WHERE `time`= '$time1'";

//alterou placar vazio para vitoria time 1 ok
$sqlev11= "UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`vitoria`=`vitoria`+1,`Gols Pro`=`Gols Pro`+'$placar11',`Gols Sofridos`=`Gols Sofridos`+'$placar22',`saldo de gol`=`saldo de gol`+'$placar11'-'$placar22',`pontos`=`pontos`+2 WHERE `time`= '$time1'";
$sqled22="UPDATE `tb_campeonato` SET `jogos`=`jogos`+1,`derrota`=`derrota`+1,`Gols Pro`=`Gols Pro`+'$placar22',`Gols Sofridos`=`Gols Sofridos`+'$placar11',`saldo de gol`=`saldo de gol`+'$placar22'-'$placar11' WHERE `time`= '$time2'";

//alterou placar empate para vitoria time 1 ok
$sqle0v11= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`+1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`+1 WHERE `time`= '$time1'";
$sqle0d22="UPDATE `tb_campeonato` SET `derrota`=`derrota`+1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`-1 WHERE `time`= '$time2'";

//alterou placar empate para vitoria time 2 ok
$sqle0v22= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`+1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`+1 WHERE `time`= '$time2'";
$sqle0d11="UPDATE `tb_campeonato` SET `derrota`=`derrota`+1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`-1 WHERE `time`= '$time1'";

//alterou placar vitoria time 2 para empate 
$sqlv2e= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`-1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`-1 WHERE `time`= '$time2'";
$sqld1e="UPDATE `tb_campeonato` SET `derrota`=`derrota`-1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`+1 WHERE `time`= '$time1'";

//alterou placar vitoria time 1 para empate ok
$sqlv1e= "UPDATE `tb_campeonato` SET `vitoria`=`vitoria`-1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`-1 WHERE `time`= '$time1'";
$sqld2e="UPDATE `tb_campeonato` SET `derrota`=`derrota`-1,`empate`=`empate`+1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`+1 WHERE `time`= '$time2'";

//alterou placar vitoria time 1 para vazio ok
$sqlv1e0= "UPDATE `tb_campeonato` SET `jogos`=`jogos`-1,`vitoria`=`vitoria`-1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22',`pontos`=`pontos`-2 WHERE `time`= '$time1'";
$sqld2e0="UPDATE `tb_campeonato` SET `jogos`=`jogos`-1, `derrota`=`derrota`-1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11' WHERE `time`= '$time2'";

//alterou placar vitoria time 2 para empate vazio ok
$sqlv2e0= "UPDATE `tb_campeonato` SET `jogos`=`jogos`-1,`vitoria`=`vitoria`-1,`Gols Pro`=`Gols Pro`+'$placar22'-'$placar2',`Gols Sofridos`=`Gols Sofridos`+'$placar11'-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1'+'$placar22'-'$placar11',`pontos`=`pontos`-2 WHERE `time`= '$time2'";
$sqld1e0="UPDATE `tb_campeonato` SET `jogos`=`jogos`-1,`derrota`=`derrota`-1,`Gols Pro`=`Gols Pro`+'$placar11'-'$placar1',`Gols Sofridos`=`Gols Sofridos`+'$placar22'-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2'+'$placar11'-'$placar22' WHERE `time`= '$time1'";

//alterou um placar empate para vazio ok
$sqle1e="UPDATE `tb_campeonato` SET `jogos`=`jogos`-1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`-'$placar1',`Gols Sofridos`=`Gols Sofridos`-'$placar2',`saldo de gol`=`saldo de gol`-'$placar1'+'$placar2',`pontos`=`pontos`-1 WHERE `time`= '$time1'";
$sqle2e="UPDATE `tb_campeonato` SET `jogos`=`jogos`-1,`empate`=`empate`-1,`Gols Pro`=`Gols Pro`-'$placar2',`Gols Sofridos`=`Gols Sofridos`-'$placar1',`saldo de gol`=`saldo de gol`-'$placar2'+'$placar1',`pontos`=`pontos`-1 WHERE `time`= '$time2'";




$res=mysqli_query($con,$sql2);
$linhas=mysqli_affected_rows($con);

if($linhas == 1){
echo "registro gravado </br>";

if($placar1>$placar2 and $placar11>$placar22){
  $res1=mysqli_query($con,$sqlv1);
  $res2=mysqli_query($con,$sqld2);


}elseif ($placar1>$placar2 and $placar11<$placar22) {
  $res3=mysqli_query($con,$sqld11);
  $res4=mysqli_query($con,$sqlv22);

}elseif ($placar2>$placar1 and $placar22>$placar11) {
  $res5=mysqli_query($con,$sqlv2);
  $res6=mysqli_query($con,$sqld1);

}elseif ($placar2>$placar1 and $placar22<$placar11) {
  $res7=mysqli_query($con,$sqld22);
  $res8=mysqli_query($con,$sqlv11);

}elseif ($placar1==$placar2 and $placar22==0 and $placar22==$placar11 and $placar1!=0) {
  $res9=mysqli_query($con,$sqle1e);
  $res10=mysqli_query($con,$sqle2e);

}elseif ($placar1==$placar2 and $placar2!=0 and $placar22==$placar11 and $placar22!=0) {
  $res11=mysqli_query($con,$sqle1);
  $res12=mysqli_query($con,$sqle2);

}elseif ($placar1==$placar2 and $placar1==0 and $placar22==$placar11 and $placar22!=0) {
  $res13=mysqli_query($con,$sqle11);
  $res14=mysqli_query($con,$sqle22);

}elseif ($placar2==$placar1 and $placar1==0 and $placar11>$placar22) {
  $res15=mysqli_query($con,$sqled22);
  $res16=mysqli_query($con,$sqlev11);

}elseif ($placar2==$placar1 and $placar1==0  and $placar22>$placar11) {
  $res17=mysqli_query($con,$sqlev22);
  $res18=mysqli_query($con,$sqled11);

}
elseif ($placar2==$placar1 and $placar1 !=0  and $placar22>$placar11) {
  $res19=mysqli_query($con,$sqle0v22);
  $res20=mysqli_query($con,$sqle0d11);

}elseif ($placar2==$placar1 and $placar1 !=0 and $placar22<$placar11) {
  $res21=mysqli_query($con,$sqle0v11);
  $res22=mysqli_query($con,$sqle0d22);

}elseif ($placar2<$placar1 and $placar22==$placar11 and $placar11==0) {
  $res23=mysqli_query($con,$sqlv1e0);
  $res24=mysqli_query($con,$sqld2e0);
  

}elseif ($placar2>$placar1 and $placar22==$placar11 and $placar11==0) {
  $res25=mysqli_query($con,$sqld1e0);
  $res26=mysqli_query($con,$sqlv2e0);

}elseif ($placar2>$placar1 and $placar22==$placar11 and $placar22!=0) {
  $res27=mysqli_query($con,$sqlv2e);
  $res28=mysqli_query($con,$sqld1e);

}elseif ($placar2<$placar1 and $placar22==$placar11 and $placar22!=0) {
  $res29=mysqli_query($con,$sqlv1e);
  $res30=mysqli_query($con,$sqld2e);

}


}else{
  echo "Deu ruim, voce tentou alterar para um valor que nao mudou.";
}

mysqli_close($con);


echo "<a href='jogosaltera.php?rodada=$rodada'>voltar</a>";?>
</body>
</html>