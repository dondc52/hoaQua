<?php 
// $hostname = "localhost";
// $username = "root";
// $password = "";
// $dbname = "btl";
$conn=mysqli_connect('localhost','root','','btl');
if (!$conn) {
 die('Không thể kết nối: ' . mysqli_error($conn));
 exit();
}

$abc = 'admin';

$sql = "SELECT * FROM login WHERE username='{$abc}'";
$result = mysqli_query($conn, $sql);
    // if (mysqli_num_rows($result) > 0) {
    // Hiển thị kết quả
    		// while($row = mysqli_fetch_assoc($result)) {
    		// echo "Account Name: " . $row["username"]. ", Account Password: " . $row["password"]. "<br>";
    		// }
    	// } else {
    	// echo "Không có tài khoản nào";
    // } 
 $row = mysqli_fetch_assoc($result);
 // echo $row["username"];
 // echo "<br>	";
 echo $row['password'];
 // echo "<br>	";
 // echo $row["username"];
 // echo "<br>	";
 // echo $row["password"];

 mysqli_close($conn);

// echo 'Kết nối thành công';
// mysqli_close($conn);


 ?>