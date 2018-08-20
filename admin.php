<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" href="css/styleAdmin.css">
</head>
<body>
	<header>
	<div class="banner">
		<h1> ADMIN - CSE486 </h1>
	</div>
	</header>
	<nav>
		<div class="container" >
			<ul>
			<li><a href="home.php"> Trang Chủ </a></li>
			<li><a href="#"> Admin </a></li>
			<li><a href="themKH.php"> Thêm Khóa Học </a></li>
			<li><a href="signup.php"> Signup </a></li>
			<li><a href="login.php"> Logout </a></li>
		  	</ul>
		</div>		
	</nav>
	<main>
		<div class="content">
			<div class="baiTap abc">
				<div><a href=""> Thêm Thông Báo </a></div>
				<form action="server/handleTB.php" method="POST">
				<div>
					<input type="text" name="td" placeholder="Tiêu đề" style="width: 540px; height: 20px; background-color: #FFFFCC;">
					<textarea placeholder="Nội dung" style="width: 540px; height: 100px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button type="submit" name="btnLogin" style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
				</form>
			</div>
			<div class="baiGiang abc">
				<div><a href=""> Thêm Bài Tập </a></div>
				<form action="server/handleBT.php" method="POST">
				<div>
					<input type="text" name="td" placeholder="Tiêu đề" style="width: 540px; height: 20px; background-color: #FFFFCC;">
					<textarea placeholder="Nội dung" style="width: 540px; height: 100px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button type="submit" name="btnLogin" style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
				</form>
			</div>
			<div class="nopBai abc">
				<div><a href=""> Thêm Bài Giảng </a></div>
				<form action="server/handleBG.php" method="POST">
				<div>
					<input type="text" name="td" placeholder="Tiêu đề" style="width: 540px; height: 20px; background-color: #FFFFCC;">
					<textarea placeholder="Nội dung" style="width: 540px; height: 100px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button type="submit" name="btnLogin" style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
				</form>
			</div>
		</div>
		<div class="ds">
			<div><a href=""> Danh Sách SV Nộp BT </a></div>
			<div></div>			
		</div>
	</main>
</body>
</html>