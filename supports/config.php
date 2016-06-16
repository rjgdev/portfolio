<?php
	$dsn  = "mysql:host=localhost;dbname=portfolio";
	$user = "root";
	$pwd  = "";

	try {
		$con = new PDO($dsn,$user,$pwd);
	} catch (Exception $e) {
		die("Failed to connect: ".$e->getMessage());
	}
?>