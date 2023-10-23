<?php
	require_once 'config.php';
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
		error_log("Connected to $dbname at $host successfully.") ;
	} catch (PDOException $pe) {
		die("Could not connect to the database $dbname :" . $pe->getMessage());
	}