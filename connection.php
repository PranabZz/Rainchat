<?php 


$servername ="localhost";
$username = "user";
$password = "root";
$db = "id18428070_chat";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn){
  echo "No connection";
}

?>
