<?php
if(isset($_POST[('btnLogin')])) {
	$username = $_POST['user'] ?? '';
	$username = strip_tags($username);

	$password = $_POST['pass'] ?? '';
	$password = strip_tags($password);

	$conn = mysqli_connect('localhost','root','','btl');
	$sql = "SELECT * FROM login WHERE username='{$username}'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
	 // echo <script>alert($row['password'])</script>;
	// $abc = $row["password"];
	// echo $abc;
	if( $username == '' || $password == '') {
		header('location:../login.php?state=err');
	}
	else {

		if( $password == $row['password']){
			header('location:../admin.php');
		}
		else {	
			header('location:../login.php?state=fail');
		}
	}
	
	mysqli_close($conn);
}