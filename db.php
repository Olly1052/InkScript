<?php
	$db_host = "localhost";
	
	// TODO 3: Update db.php with your MySQL account details
	$db_user = "ofo287";
	$db_pwd = "@Lulu0920!";
	$db_db = "lab10db";

	$charset = 'utf8mb4';
	$attr = "mysql:host=$db_host;dbname=$db_db;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];
?>