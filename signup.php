
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>signup</title>
 	<link rel="stylesheet" href="css/styleLogin.css">
 </head>
 <body>
 	<div class="container">
 		<div><h2> Tạo Tài Khoản </h2></div>
		<form action="server/handle1.php" method="POST">
			<div class="u a">				
				<label for="user"> Tên đăng nhập: </label>
				<input type="text" name="user" id="user">
			</div><br>
			<div class="p a">				
				<label for="pass"> Mật khẩu: </label>
				<input type="password" name="pass" id="pass">
			</div><br>
			<div class="r a">				
				<label for="pass"> Nhập lại MK: </label>
				<input type="password" name="pass1" id="pass1">
			</div><br>

			<button style="margin: 0 0 15px 190px;" type="submit" name="btnLogin"> Đăng Ký </button>
		</form>
	</div>
 </body>
 </html>