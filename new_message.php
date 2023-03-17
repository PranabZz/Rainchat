<?php

session_start();

$user = $_SESSION['name'];
$to = $_SESSION['to'];
include "connection.php";


	if(!$conn){
	echo "No connection";
		}
$output = "";

$sequal = "SELECT * FROM `Messages` WHERE Message_To = '$user' AND Message_From = '$to' OR Message_To='$to' AND Message_From='$user'";

	$re = $conn->query($sequal);

	if (!$re) {
			echo "XXXConnectedX";
	}


	while ($row = mysqli_fetch_row($re)) {
		if ($row[2] != $user) {
			$output .= "<div class='alert alert-primary' role='alert' style='width:full; text-align:left'>
			$row[2]:<br>$row[3]
		  		</div>";
		} else {
			$output .=  " <div class='alert alert-warning' role='alert' style='width:full; text-align:right'>
			$row[2]:<br>$row[3]
		  	</div>";
		}
	}

	echo $output;

?>
