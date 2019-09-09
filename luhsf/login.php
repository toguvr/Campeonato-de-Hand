<!DOCTYPE html>
<?php
include "head.php";



?>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/trevo1.png');" data-stellar-background-ratio="0.5">

	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">

			<form style="margin-top:200px;" method="post" action="login.php" >
					<div class="form-group">
						<i class="fa fa-user"></i>
<div class='alert alert-danger' role='alert'>
 <center> Usuário ou senha incorretos!</center>
</div>
						<input type="text" name="user" class="form-control" placeholder="Usuário" required="required">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="password" name="senha" class="form-control" placeholder="Senha" required="required">					
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" value="Entrar">
					</div>
				</form>	

</div>
</div>
    </section>

<?php
$user=$_POST['user'];
$senha=$_POST['senha'];


$sql= "SELECT * FROM `cadastro` WHERE `nome`='$user' and `senha`= '$senha'";
$res=mysqli_query($con,$sql);
$linha=mysqli_affected_rows($con);
if ($linha>0){
	$num=rand(100000,900000);
	session_start();
	$_SESSION['numLogin']=$num;
	$_SESSION['username']=$user;
	while ($reg=mysqli_fetch_row($res)) {
		$categoria=$reg[3];
	header ("location:$categoria.php?num1=$num");}
}else{

	    echo "";

}


?>
 	<?php
 	include "foot.php";
 	?>


