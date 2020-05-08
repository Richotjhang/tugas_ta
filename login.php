<?php
//session_start();
require 'functions.php';

if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'"); 

	//cek username
	if( mysqli_num_rows($result) === 1 ) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {

			// set session
			//$_SESSION["login"] = true;

			header("Location: index.html");
			exit;
		}
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
<style>

*{
	margin: 0;
	padding: 0;
}

.hero{
	height: 100%;
	width: 100%;
	background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(back.jpg);
	background-position: center;
	background-size: cover;
	position: absolute;
}

.form-box{
	width: 380px;
	height: 470px;
	position: relative;
	margin: 6% auto;
	background: #fff;
	padding: 5px;
}

.button-box{
	width: 100px;
	margin: 35px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}

.toggle-btn{
	padding: 10px 24px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
}

a{
	text-decoration: none;
	color: black;
}

#btn{
	top: 0;
	left: 0;
	position: absolute;
	width: 100px;
	height: 100%;
	border-radius: 30px;
	background: linear-gradient(to right, #ff105f, #ffad06);
	transition: .5s;
}

.social-icons{
	margin: 30px auto;
	text-align: center;
}

.social-icons img{
	width: 30px;
	margin: 0 12px;
	box-shadow: 0 0 20px 0 #7f7f7f3d;
	cursor: pointer;
	border-radius: 50%; 
}

.input-group{
	top: 165px;
	position: absolute;
	width: 280px;
	transition: .5s;
}

.input-field{
	width: 100%;
	padding: 10px 0;
	margin: 5px 0;
	border-left: 0;
	border-top: 0;
	border-right: 0;
	border-bottom: 1px solid #999;
	outline: none;
	background: transparent;
}

.submit-btn{
	width: 79%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f, #ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;
}

#login{
	left: 50px;
}

.input-group img{
	margin-top: 6%;
	margin-left: 25%;
	width: 48%;
}

</style>
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn"><a href="regis.php">Register?</button></a>
			</div>

	
			<div class="social-icons">
				<img src="fb.png">
				<img src="tw.png">
				<img src="gp.png">
			</div>


			<form id="login" class="input-group" action="" method="post">
				<label for="username" style="font-size: 14px;">Username :</label>
				<input type="text" class="input-field" name="username" id="username">

				<label for="password" style="font-size: 14px;">Password :</label>
				<input type="password" class="input-field" name="password" id="password">

				<button type="chech-box"></button>
				<button type="submit" class="submit-btn" name="login">Log In</button>

				<img src="logo.png">

				<?php if( isset($error) ) : ?>
					<p style="text-align: center; color: red;"> username / password salah </p>
				<?php endif; ?>
			</form>

		</div>
	</div>

</body>
</html>