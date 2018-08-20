<?php 
if(isset($_POST[('btnLogin')])) {
	$td = $_POST['td'] ?? '';
	$td = strip_tags($td);

	$nd = $_POST['bl'] ?? '';
	$nd = strip_tags($nd);

	$conn = mysqli_connect('localhost','root','','btl');

	$sql = " INSERT INTO bg (td,nd) VALUES ('{$td}','{$nd}')";
	$conn->query($sql);
	header('location:../admin.php');

	mysqli_close($conn);
}