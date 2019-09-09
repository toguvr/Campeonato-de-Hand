<?php
session_start();
if (isset($_SESSION['numLogin'])) {
	$n1=$_GET['num1'];
	$n2=$_SESSION['numLogin'];
	if ($n1 !=$n2) {
		echo "login nao efetuado!";
		exit;
		# code...
	}
}else{
	echo "login nao efetuado";
	exit;
}

?>
