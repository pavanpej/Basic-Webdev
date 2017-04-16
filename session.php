<?php
	session_start();
	setcookie(session_name(),session_id(),time()+3600,'/','.example.com');
	if(isset($_SESSION['counter'])){
		$_SESSION['counter'] +=1;
	}
	else{
		$_SESSION['counter']=1;
	}
	$msg='You have visited this page '.$_SESSION['counter'].' times in this session';
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Why we need a php session</title>
	</head>
	<body>
		<?php
		echo($msg); ?>
	</body>
	</html>