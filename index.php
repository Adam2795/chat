<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>WebChat</title>
</head>
<body>
	
	<div id="main">
		
		<div id="content">
			<h2>Введите данные для авторизации</h2>

				<?php if($_GET["err"] == 1){echo "<span class='red'>вы ввели неправильные данные</span>";} ?>
				
			<form action="singin.php" method="post">
				
				<label><b>UserName:</b></label>
				<input type="text" name="uname" placeholder="user name"><br><br>
				<label><b>Password:</b></label>
				<input type="text" name="password" placeholder="password"><br><br>				
				<button style="background-color: grey; color: white;" type="submit">Войти</button>

			</form>

			<h2>Регистрация</h2>
			<form action="singup.php" method="post">
				
				<label><b>UserName:</b></label>
				<input type="text" name="uname" placeholder="user name"><br><br>
				<label><b>Password:</b></label>
				<input type="text" name="password" placeholder="password"><br><br>	
				<label><b>Email:</b></label>
				<input type="text" name="email" placeholder="email"><br><br>
				<button style="background-color: grey; color: white;" type="submit">Зарегистрироваться</button>

			</form>



		</div>

	</div>

</body>
</html>