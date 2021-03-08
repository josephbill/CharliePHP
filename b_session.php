<?php
session_start(); //intialize session

//pick up sessions 

if (isset($_SESSION['favColor']) && isset($_SESSION['favFood'])) {
	# code...

echo "Favourite color is " . $_SESSION['favColor'];
echo "<br>";
echo "Favourite Car is " . $_SESSION['favCar'];

session_unset();
session_destroy();
}  else {
	echo "Favourite color cannot be fetched , try again later";
	
session_unset();
session_destroy();
}




?>