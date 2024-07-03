<?php
require_once('config.php');
?>
<?php


include("includes/db.php");

?>
<?php


	session_start();


	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["admin_email"] = $_POST["email"];


	$mysqli = new mysqli("localhost", "root", "root", "test");


	$sql = "SELECT * FROM users WHERE admin_email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE admin_email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO users (name, admin_email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}


	$mysqli->query($sql2);


	echo "Updated Successful";
?>