<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demo ajax</title>
</head>
<body>
	<form action="">
		<label for=""> username: </label>
		<input type="text" name="username" id="txtUser"><br>
		<button type="submit" name="search" onclick="searchUser"> search </button>
	</form>
	<div id="result">
		
	</div>
	<script>
		function searchUser(){
			var user = document.getElementById('txtUser').value;
			var data = "user name" + user;
			var xhr = new XMLHttpRequest();
			xhr.open('POST', 'search.php', true);
			xhr.send(data);
			xhr.anreadystatechange= function(){
				if(xhr.readyState == 4){
					if (xhr.status == 200){
						document.getElementById('result').innerHTML= xhr.reponseText;
					}
				}
			}
		}
	</script>
</body>
</html>