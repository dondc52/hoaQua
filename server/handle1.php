<?php
if(isset($_POST[('btnLogin')])) {
	$username = $_POST['user'] ?? '';
	$username = strip_tags($username);

	$password = $_POST['pass'] ?? '';
	$password = strip_tags($password);

	$password1 = $_POST['pass1'] ?? '';
	$password1 = strip_tags($password1);

	// echo($password);
	// echo($password1);

	$conn = mysqli_connect('localhost','root','','btl');

	if($password == $password1) {
		// $sql = " INSERT INTO login ('username','password') VALUES ('{$username}','{$password}')";
		// $conn->query($sql);
		$sql = " INSERT INTO login (username,password) VALUES ('{$username}','{$password}')";
		$conn->query($sql);
		// echo "abc";
		header('location:../admin.php');
	}
	else {	
			header('location:../signup.php?state=fail');
	}

	mysqli_close($conn);
}