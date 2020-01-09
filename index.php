<?php
session_start();
if (isset($_SESSION["email"])) {
	header('location:dash.php');

} else {
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In Portal</title>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
		.login-contaniner{
			position:absolute;
			justify-content: center;
			align-items: center;
			width: 50%;
			height: 50%;
			background-color: #888;
			left: 50%;
			top: 50%;

			transform: translate(-50%,-50%);

		}
		.login-contaniner form
		{

			display: block;
			margin: auto;
			width: 80%;
			height: 200px;
			background-color: #eee;
			padding: 30px;
		}
		.box
		{
			margin: auto;
			position: relative;
			align-items: center;
			width:50%;
			height: 50px;
			background: #888;
			padding: 10px;




		}
		.box label, input
		{
			position:absolute;
		}
		.box input
		{
			width: 80%;
			height: 20px;
			top: 30px;

		}
		.box button
		{
			width: 40%;
			height: 50px;
			border:none;
			background: #44FF7F;
		}

	</style>
</head>
<body>
 <div class="login-contaniner">
 	<h1 style="width: 100%;background-color: black;color:white;text-align: center; margin-top:0px;">Log In</h1>

 	<form action="loginAuth.php" method="post">
		<div class="box">
			<label for="Username">Email Id</label>
 			<input type="text" class="" name="email">
 		</div>
 		<div class="box">
 			<label for="Username">Password</label>
 			<input type="Password" class="" name="Password">
 		</div>
 		<div class="box">
 			<button name="login">Submit</button>
 		</div>

 	</form>

 </div>
</body>
</html>
<?php
}
?>