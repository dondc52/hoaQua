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
			<li><a href="signup.php"> Signup </a></li>
			<li><a href="login.php"> Logout </a></li>
		  	</ul>
		</div>		
	</nav>
	<main>
		<div class="content">
			<div class="baiTap abc">
				<div><a href=""> Thêm Thông Báo </a></div>
				<div>
					<textarea style="width: 540px; height: 120px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
			</div>
			<div class="baiGiang abc">
				<div><a href=""> Thêm Bài Tập </a></div>
				<div>
					<textarea style="width: 540px; height: 120px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
			</div>
			<div class="nopBai abc">
				<div><a href=""> Thêm Bài Giảng </a></div>
				<div>
					<textarea style="width: 540px; height: 120px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button style=" background-color: #333300; color: white; margin-left:250px; 
					 padding: 10px 20px;"> OK </button>
				</div>
			</div>
		</div>
		<div class="ds">
			<div><a href=""> Danh Sách SV Nộp BT </a></div>
			<div></div>			
		</div>
	</main>
</body>
</html>