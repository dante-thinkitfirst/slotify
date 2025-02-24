<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/London");

	// InfinityFree database credentials
	$host = 'sql.infinityfree.com';  // Replace with your actual MySQL hostname
	$username = 'if0_38376670';   // Replace with your provided username
	$password = 'WiEbsH6wxWQpA6';      // Replace with your provided password
	$database = 'if0_38376670_slotify';   // Replace with your provided database name

	$con = mysqli_connect($host, $username, $password, $database);


	// $con = mysqli_connect("localhost", "root", "", "slotify");

	if(mysqli_connect_errno()) {
		error_log("Failed to connect to MySQL: " . mysqli_connect_error());
		// You might want to redirect to an error page instead of showing the error
		die("Connection failed: " . mysqli_connect_error());
	}

	// Test the connection
	if(!$con->ping()) {
		error_log("MySQL server has gone away");
		die("Lost connection to MySQL server");
	}
?>