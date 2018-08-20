
<?php require 'server/abcHome.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>bai giang</title>
	<link rel="stylesheet" href="css/styleBg.css">
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
			<li><a href="home.php"> Trang Chủ </a></li>
			<li><a href="tb.php"> Thông báo </a></li>
			<li><a href="bt.php"> Bài tập </a></li>
			<li><a href="#"> Bài Giảng </a></li>
			<li><a href="login.php"> Login </a></li>
		  	</ul>
		</div>		
	</nav>
	<main>
		<div class="l">
			<div class="h"><h3> Bài Giảng Mới </h3></div>
			<div class="a e" style="word-wrap: break-word;">
				<h3><?php echo $td2; ?></h3>
				<p><?php echo $nd2; ?></p>
			</div>
			<div class="b e" style="word-wrap: break-word;">
				<h3><?php echo $td2a; ?></h3>
				<p><?php echo $nd2a; ?></p>
			</div>
			<div class="c e" style="word-wrap: break-word;">
				<h3></h3>
				<p></p>
			</div>
			<div class="d e" style="word-wrap: break-word;">
				<h3></h3>
				<p></p>
			</div>
		</div>
		<div class="r">
			<div class="ds"><a href="#"> DS Bài Giảng</a></div>
		</div>
		<div></div>
	</main>
</body>
</html>