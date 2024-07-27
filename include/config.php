<?php 
	$app_name='Encodevilla';
	$base_url = "http://localhost/students";
	$servername = "localhost";
	$username = "root";
	$password = "usbw";
	$database = "encodevilla_project";

	// Create connection
		$conn = new mysqli($servername, $username, $password, $database);

	// Check connection
	if ($conn->connect_error)
	{
	    die("Connection failed: " . $conn->connect_error);
	}
 ?>