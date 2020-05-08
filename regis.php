<?php
require 'functions.php';

if( isset($_POST["register"]) )
{
	if( regis($_POST) > 0) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			</script>";
	} else{
		echo mysqli_error($conn);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
<style>

*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
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
	height: 490px;
	position: relative;
	margin: 6% auto;
	background: #fff;
	padding: 5px;
}

.button-box{
	width: 110px;
	margin: 25px auto;
	position: relative;
	box-shadow: 0 0 20px 9px #ff61241f;
	border-radius: 30px;
}


.toggle-btn{
	padding: 10px 35px;
	cursor: pointer;
	background: transparent;
	border: 0;
	outline: none;
	position: relative;
	border-radius: 30px;
	background: linear-gradient(to right, #ff105f, #ffad06);
}

a{
	text-decoration: none;
	color: black;
}

.social-icons{
	margin: 10px;
	text-align: center;
}

.social-icons img{
	width: 25px;
	margin: 0 12px;
	box-shadow: 0 0 20px 0 #7f7f7f3d;
	cursor: pointer;
	border-radius: 50%; 
}

.input-group{
	top: 140px;
	position: absolute;
	width: 250px;
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
	width: 85%;
	padding: 10px 30px;
	cursor: pointer;
	display: block;
	margin: auto;
	background: linear-gradient(to right, #ff105f, #ffad06);
	border: 0;
	outline: none;
	border-radius: 30px;
}

#regis{
	left: 70px;
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
				<button type="button" class="toggle-btn"><a href="login.php">Login?</button></a>
			</div>
	
			<div class="social-icons">
				<img src="fb.png">
				<img src="tw.png">
				<img src="gp.png">
			</div>

			<form id="regis" class="input-group" action="" method="post">
				<label for="username" style="font-size: 14px;">Username :</label>
				<input type="text" class="input-field" name="username" id="username">

				<label for="password" style="font-size: 14px;">Password :</label>
				<input type="password" class="input-field" name="password" id="password">

				<label for="password2" style="font-size: 14px;">Konfirmasi Password :</label>
				<input type="password" class="input-field" name="password2" id="password2">

				<button type="chech-box"></button>
				<button type="submit" class="submit-btn" name="register">Register!</button>

				<img src="logo.png">
			</form>
		</div>
	</div>

</body>
</html>