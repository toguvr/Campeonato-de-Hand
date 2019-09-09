<?php
include "head.php";

?>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Atualizar Jogadores</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Atualizar Jogadores<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <center>
    <section class="ftco-section">
         <div class="col-md-5 sidebar">
           
              <h2 class="mb-4">Atualizar Jogadores</h2>
         <div class="sidebar-box">

              <table class="table table-league">







   
   
  <?php


$id=$_POST["id"];
$time=$_POST["time"];
$jogador=$_POST["jogador"];
$gols=$_POST["gols"];




// verifica se foi enviado um arquivo 
if(isset($_FILES['arquivo']['name']) && $_FILES["arquivo"]["error"] == 0)
{

  echo "Você enviou o arquivo: <strong>" . $_FILES['arquivo']['name'] . "</strong><br />";
  echo "Este arquivo é do tipo: <strong>" . $_FILES['arquivo']['type'] . "</strong><br />";
  echo "Temporáriamente foi salvo em: <strong>" . $_FILES['arquivo']['tmp_name'] . "</strong><br />";
  echo "Seu tamanho é: <strong>" . $_FILES['arquivo']['size'] . "</strong> Bytes<br /><br />";

  $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
  $nome = $_FILES['arquivo']['name'];
  

  // Pega a extensao
  $extensao = strrchr($nome, '.');

  // Converte a extensao para mimusculo
  $extensao = strtolower($extensao);

  // Somente imagens, .jpg;.jpeg;.gif;.png
  // Aqui eu enfilero as extesões permitidas e separo por ';'
  // Isso server apenas para eu poder pesquisar dentro desta String
  if(strstr('.jpg;.jpeg;.gif;.png', $extensao))
  {
    // Cria um nome único para esta imagem
    // Evita que duplique as imagens no servidor.
    $novoNome = md5(microtime()) . '.' . $extensao;
    
    // Concatena a pasta com o nome
    $destino = 'imagens/' . $novoNome; 
    
    // tenta mover o arquivo para o destino
    if( @move_uploaded_file( $arquivo_tmp, $destino  ))
    {
      echo "Arquivo salvo com sucesso em : <strong>" . $destino . "</strong><br />";
      echo "<img src=\"" . $destino . "\" />";
    }
    else
      echo "Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />";
  }
  else
    echo "Você poderá enviar apenas arquivos \"*.jpg;*.jpeg;*.gif;*.png\"<br />";
}
else
{
  echo "Você não enviou nenhum arquivo!";
}

if (isset ($novoNome) ) {
  $sql= "UPDATE `jogadores` SET `time`='$time',`jogador`='$jogador',`img`='$novoNome',`gols`=$gols WHERE `id`=$id"; 
$res=mysqli_query($con,$sql);
$linhas=mysqli_affected_rows($con);

if($linhas == 1){
echo "<div class='alert alert-success' role='alert'>
 <center>Alteração Gravada.</center>
</div>";
  # code...
}}else{
$sql= "UPDATE `jogadores` SET `time`='$time',`jogador`='$jogador',`gols`=$gols WHERE `id`=$id"; 
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
}
mysqli_close($con)
?>

<a href="jogadoratt.php">voltar</a>

</table></div></div></section></center>

		
		<?php
    include "foot.php";
    ?>