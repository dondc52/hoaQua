<?php require 'server/abcHome.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>home</title>
	<link rel="stylesheet" href="css/styleHome.css">
</head>
<body>
	<header>
		<div class="banner">
			<h1> TRANG WEB MÔN HỌC - CSE486 </h1>
		</div>
	</header>
	<nav>
		<div class="container" >
			<ul>
			<li><a href="#"> Trang Chủ </a></li>
			<li><a href="tb.php"> Thông báo </a></li>
			<li><a href="#"> Bài tập </a></li>
			<li><a href="bg.php"> Bài Giảng </a></li>
			<li><a href="login.php"> Login </a></li>
		  	</ul>
		</div>		
	</nav>
	<div class="main">	
		<div class="content">
			<div class="thongBao abc">
				<div><a href=""> Thông Báo </a></div>
				<div style="word-wrap: break-word;">
					<h3><?php echo $td; ?></h3>
					<p><?php echo $nd ?></p>
				</div>
			</div>
			<div class="baiTap abc">
				<div><a href=""> Bài Tập </a></div>
				<div style="word-wrap: break-word;">
					<h3><?php echo $td1 ?></h3>
					<p><?php echo $nd1 ?></p>
				</div>
			</div>
			<div class="baiGiang abc">
				<div><a href=""> Bài Giảng </a></div>
				<div style="word-wrap: break-word;">
					<h3><?php echo $td2 ?></h3>
					<p><?php echo $nd2 ?></p>
				</div>
			</div>
			<div class="nopBai abc">
				<div><a href=""> Nộp Bài </a></div>
				<div>
					<textarea style="width: 630px; height: 120px; background-color: #FFFFCC;"
					 name="bl" cols="20" rows="3"></textarea><br>
					<button style=" background-color: #333300; color: white; margin-left:300px; 
					 padding: 10px 20px;"> Nộp </button>
				</div>
			</div>
		</div>
		<div class="ds">
			<div><a href=""> Danh Sách SV Nộp BT </a></div>
			<div></div>			
		</div>
	</div>
</body>
</html>