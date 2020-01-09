<?php
session_start();
require_once "connection.php";
if (isset($_POST["login"])) {
	$email = $_POST["email"];
	$pass = $_POST["pass"];

	$query = "SELECT `email`, `pass` FROM `logindata` WHERE `email` = $email AND `pass` = $pass";

	$run = mysqli_query($conn, $query);

	$row = mysqli_num_rows($run);

	if ($row >= 0) {
		$_SESSION["email"] = $email;
		header('location:dash.php');
	} else {
		echo "<script>alert('Invailid Inputs...')</script>";
	}
}

?>