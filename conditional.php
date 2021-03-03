<?php
// $x = 101;
// // if and else statement 
// if ($x >= 100) {
// 	# code...
// 	echo "Sorry transaction declined , transfer less funds";
// } else {
// 	echo "Funds transacted successfully";
// }


//if elseif else 
$color = "blue";

if ($color === "red") {
	# code...
	echo "color is red";
} elseif ($color === "blue") {
	# code...
	echo "color is blue";


} elseif ($color === "green"){
    echo "color is green";
} else {
   echo "color not found";
}

// switch
$role = "utility staff";

switch ($role) {
	case 'teacher':
		# code...
	    echo "Teacher dashboard";
		break;
		case 'kitchen staff':
		echo "Kitchen dashboard";
	    break;
	    case 'utility staff':
	    echo "utility dashboard";
	    break;
	default:
	    echo "user not found";
		# code...
		break;
}




?>