<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'tasks');

	if ($mysqli->connect_error) {
		die('Connect Error(' . $mysqli_>connect_errno .')'
		 . $mysqli->connect_error	);
		
	}
	else{
		echo "Connection made";
	}
	$mysql->close();
?>