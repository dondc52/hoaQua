
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>login</title>
 	<link rel="stylesheet" href="css/styleLogin.css">
 </head>
 <body>
 	<div class="container">
 		<div><h2> Đăng Nhập </h2></div>
		<form action="server/handle.php" method="POST">
			<div class="u a">				
				<label for="user"> Tên đăng nhập: </label>
				<input type="text" name="user" id="user">
			</div><br>
			<div class="p a">				
				<label for="pass"> Mật khẩu: </label>
				<input type="password" name="pass" id="pass">
			</div><br>
			<button type="submit" name="btnLogin"> Đăng nhập </button>
			<div class="h"><a href="home.php"> Trang Chủ </a></div>
		</form>

	</div>
 </body>
 </html>