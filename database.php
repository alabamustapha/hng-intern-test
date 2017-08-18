<?php

/**
 * basic function to connect, read, create, and update a simple db
 */

require_once 'constants.php';

function connect_db($host = DB_HOST, $username = DB_USER, $password = DB_PASSWORD, $db = DB_NAME){
	$link = mysqli_connect($host, $username, $password, $db);

	if (!$link) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	return $link;
}

