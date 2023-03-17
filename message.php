<?php
session_start();
$user =  $_SESSION['name'];
$user = filter_var($user, FILTER_SANITIZE_STRING);
$_SESSION['to'] = $_GET['to'];
$to =   filter_var($_SESSION['to'], FILTER_SANITIZE_STRING);
if ($_SESSION['loged']) {

	echo "Chat";

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






?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Rainchat</title>
	<style>
		.container-fluid {
			border: 1px solid black;
			display: flexbox;
			height: 100%;
			overflow: hidden;
			overflow-y: scroll;
			justify-content: center;
		}
	</style>
	<link rel="stylesheet" href="chat.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">

</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

<body>

	<div class="container-fluid " id="new">

		<div class="chatbox-wrapper">
			<div class="chatbox-message-wrapper show">
				<div class="chatbox-message-header">
					<div class="chatbox-message-profile">
						<div>
							<h4 class="chatbox-message-name"><?php echo  $to ?></h4>
							<p class="chatbox-message-status">online</p>
						</div>
					</div>
				</div>
				<div id="message_area" class="chatbox-message-content">

					<?php
					$servername = "localhost";
					$username = "user";
					$password = "root";
					$db = "id18428070_chat";

					$conn = mysqli_connect($servername, $username, $password, $db);

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
				<div class="chatbox-message-bottom">
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>?to=<?php echo $_SESSION['to'] ?>" method="POST" class="chatbox-message-form">
						<textarea rows="1" placeholder="Type message..." class="chatbox-message-input" name="message"></textarea>
						<input type="submit" name="send" value="send" class="chatbox-message-submit" />
					</form>
				</div>
			</div>
		</div>
	</div>
	
</body>
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
			$(".chatbox-message-content").scrollTop($(".chatbox-message-content")[0].scrollHeight);
		}, 700);
	});

	$(document).ready(function() {
		$(".chatbox-message-content").scrollTop($(".chatbox-message-content")[0].scrollHeight);
	});
</script>

</html>