<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "esdm_boilerplate";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);

	date_default_timezone_set('Asia/Kuala_Lumpur');

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Credentials: true');
	header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
	header("Access-Control-Allow-Headers: Origin, Content-Type, Authorization, Accept, X-Requested-With, x-xsrf-token");
	header("Content-Type: application/json; charset=utf-8");

	// cubaan satu dua tiga