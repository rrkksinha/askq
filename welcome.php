<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome | askq</title>
	</head>
<body bgcolor="lightblue">

<img src="image/rrkksinha.jpg" style="height: 100px; width: 100px"><br>

	<h1 style="color: red">Welcome <?php echo $_SESSION['fname']; ?> <?php //echo 	$_SESSION['userName']; ?>
		<br>Under Construction...
	</h1>
<?php session_destroy();  ?>
</body>
</html>