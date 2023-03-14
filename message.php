<?php
session_start();
$user =  $_SESSION['name'] ;
$user = filter_var($user,FILTER_SANITIZE_STRING);
$_SESSION['to'] = $_GET['to'];
$to =   filter_var($_SESSION['to'], FILTER_SANITIZE_STRING);
if ($_SESSION['loged']) {

	echo $user;

	if (isset($_POST['logout'])) {
		session_destroy();
		echo "<script>
	window.location.href= 'login.php';
	</script>";
	}
} else {

	echo "<script>
	alert('login first');
	</script>";

	echo "<script>
	window.location.href= 'login.php';
	</script>";
}


echo "->" . $to;



?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Rainchat</title>
	<style>
		.container-fluid{
			border: 1px solid black;
			display: flexbox;
			height: 100%;
			overflow: hidden;
			overflow-y: scroll;
			justify-content: center;
		}
	</style>
</head>
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>

    <!-- jQuery code to show
      the working of this method -->
    <script>
        $(document).ready(function() {
                $("#new").animate({
                    scrollTop: $(
                      '#new').get(0).scrollHeight
                }, 2000);
        });
	</script>
<body>

	<div class="container-fluid" id="new">


<nav class="navbar navbar-expand-lg navbar-light bg-light"></nav>
		<h2>Chat Messages</h2>
		<hr>
		<nav id="navbar-example2" class="navbar navbar-light bg-light">
		</nav>
		<div data-spy="scroll" data-target="#navbar-example2" data-offset="0">
		<div id="message_area" class ="container">
			<?php
			$servername ="localhost";
			$username = "user";
			$password = "root";
			$db = "id18428070_chat";

$conn = mysqli_connect($servername,$username,$password,$db);

			if (!$conn) {
				echo "No connection";
			}

			if (isset($_POST['send'])) {

				$message = htmlentities($_POST['message']);


				if ($message != NULL) {

					$sql =   "INSERT INTO `Messages` (`Message_To`, `Message_From`,`Message`) VALUES ('$to', '$user', '$message') ";

					$result  = $conn->query($sql);

					if (!$result) {
						echo "!Connected<br>";
					}

					$sequal = "SELECT * FROM `Messages` WHERE Message_To = '$user' AND Message_From = '$to' ";

					$re = $conn->query($sequal);

					if (!$re) {
						echo "XXXConnectedX";
					}

					// while($row = mysqli_fetch_row($re)){
					// 	if($row[2] == $user){
					// 	echo $row[2].":<p>".$row[3]."</p>";
					// 	}
					// 	else{
					// 		echo $row[2]. "<p style = 'color:red';>".$row[3] ."</p>";
					// 	}
					// }


				}
			}

			?>
		</div>
		</div>
		<p id = "new"></p>
		<form style="text-align:center;" id="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?to=<?php echo $_SESSION['to'] ?>" method="POST">
			<textarea name="message" rows="2" cols="35"></textarea>
			<input type="submit" name="send" value="Send" id="send">
			<a href="contacts.php">Go back...</a>
		</form>
	</div>
	<div class="alert alert-primary" role="alert">
		Always use See new messages instead of refreshing the page</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
		setInterval(function() {
			$.ajax({
				url: "new_message.php",
				method: "POST",
				dataType: "text",
				success: function(data) {
					if (data == '') {
						console.log("0");
					} else {
						$("#message_area").html(data);
					};
				}
			})
		}, 700);
	});

</script>

</html>
