<?php


include "connection.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacts</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-white">
	<h1 class="m-4 flex justify-center items-center text-primary">Select a person to message!!</h1>
	
	<ol>
	<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
	<?php 
	$sequal = "SELECT * FROM `User` WHERE Name != '$user' ";	
	
	$re = $conn->query($sequal);

	if (!$re) {
			echo "XXXConnectedX";
	}
	while($row = mysqli_fetch_row($re)){
		if($row[0] != NULL){ ?>
		<div class="col-sm-6 col-md-4 col-lg-3">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title"><?php echo $row[0]; ?></h5>
					<a href="message.php?to=<?php echo $row[0]; ?>" class="btn btn-primary">Message <?php echo $row[0]; ?></a>
				</div>
			</div>
		</div>
	<?php }} ?>
</div>

</ol>
<a href = "home.php">Go back..<a>
<div class="alert alert-primary" role="alert">
  Just a testing app not fully developed so choose a contact first then only proceed</div>
</body>
</html>
