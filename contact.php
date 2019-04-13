<?php

if(isset($_POST['submit'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$massage = $_POST['massage'];
	$contact = $_POST['contact'];

	$db = mysqli_connect("localhost", "truthnav_rj", "Password@123", "truthnav_cform");
	mysqli_query($db, "INSERT INTO contact VALUES (0, '$fname','$lname', '$email', '$contact', '$massage')");

	echo'<script language="javascript"> alert("Your response has been submitted.")</script>';
		include('index.html');

}
header("Location: index.html");

?>