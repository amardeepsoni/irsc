<?php
session_start();
if (isset($_SESSION["email"])) {
	$logged_user = $_SESSION["email"];

	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dash</title>
	<script src="../jquery-3.4.0.js" type="text/javascript"></script>
	<script src="pg/ajax.js" type="text/javascript"></script>
		<script>

		</script>
	<style type="text/css">
	body{
		margin: 0;
		padding: 0;
	}
	.top-panel{
		margin-top: -17px;
		width: 100%;
		height: 80px;
		background-color: #01001C;
		color: white;
		z-index: 10;
	}
	.contant-container
	{
		margin: auto;
		margin-top: 40px;
		width: 70%;
		min-height:300px;
		background: #ddd;
		text-align: center;
		overflow:hidden;
		padding-top: 10px;
		display: block;
	}
	.result{
		width: 80%;
		height: auto;
		background: #ddd;
		margin: auto;
		margin-top: 10px;
		padding: 5px;

	}
	.resultpanel
	{

		width: 100%;
		height: 100px;
		background: #DCFFC7;
		 display: flex;
 		 flex-flow: row wrap;

	}
	.resultpanel .leftdetail{
		width: 80%;
		height:inherit;
		background:#CDFFDF;
	}
	.resultpanel .percent{
		width: 20%;
		height:inherit;
		background:#F87457;
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.process{
		width: 100%;

	}
	 span.dot
	{
		font-size: 3vw;
	}
	 span.dot:nth-child(1)
	 {
	 	animation: animate 2s linear infinite ;
	 	animation-delay: .5s;
	 }
	  span.dot:nth-child(2)
	 {
	 	animation: animate 2s linear infinite ;
	 	animation-delay: 1s;
	 }
	  span.dot:nth-child(3)
	 {
	 	animation: animate 2s linear infinite ;
	 	animation-delay: 1.5s;
	 }
	textarea{
		border: none;
		margin-top: 20px;

	}
	button{
		width: 300px;height: auto; border:none;background: #7BFF57;
		transition: .5s;
	}
	button:hover{
		background-color: #70D53D;

		cursor: pointer;
	}

	@keyframes animate
	{
		0%
		{
			opacity: 0;
		}
		100%
		{
			opacity: 1;
		}
	}

	</style>
</head>
<body>
	<div class="top-panel">
	<?php
echo "<p> User Name :" . $logged_user . "</p>";
	?>
	<a href="logout.php" style=" color: white; background: red;padding: 10px; text-transform: capitalize;text-decoration: none;">
		Log Out
	</a>
	</div>
	<div class="contant-container">
		<h2>Check Plagairism</h2>
		<form id="form">
		<textarea type="text" id="txt" style="position: relative; width: 541px;height: 202px; ;font-size: 20px; margin: auto;"></textarea>
		<br>
		<button id="check" style=""><img style="height: 4vw; width: 4vw; position: relative;" src="images/btnbg.png" alt=""></button>
		</form>

	</div>

	<div id="process"><h3 style="text-align: center;">Please Wait <span class="dot">.</span><span class="dot">.</span><span class="dot">.</span></h3></div>
	<div class="result">
	<div class="resultpanel">
		<div class="leftdetail"></div>
		<div class="percent">
			<div id="percent" style="margin: auto; width: 80px; height: 80px;border-radius: 50%; border:5px solid white;display: flex;justify-content: center;align-items: center;overflow:hidden; font-size: 2vw;font-weight: bold;">

			</div>
			<span style="text-transform: capitalize;font-size: 2vw; margin-right: 5px;color: #07AAF6;font-weight: bold;">Identical</span>
		</div>
	</div>
	</div>

</body>
</html>
<?php
} else {
	header('location:index.php');
}

?>