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
 	include "foot.php";
 	?>