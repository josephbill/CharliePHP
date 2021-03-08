<?php


if (isset($_GET['username'])) {
	# code...
	$username = $_GET['username'];
	echo "Welcome user " .  $username;
} else {
	echo "url parameter not sent";
}



?>