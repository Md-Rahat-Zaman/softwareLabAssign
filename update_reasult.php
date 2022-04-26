<?php

	$user_id = $_GET["user_id"];

	$user_name = $_GET["user_name"];

	$user_pass = $_GET["user_pass"];
	
	$email = $_GET["email"];

	$Universityuniversity_id = $_GET["Universityuniversity_id"];

	$approval = $_GET["approval"];

	
	$status = $_GET["status"];

	

	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE `student` SET user_id='$user_id', user_name='$user_name' , user_pass='$user_pass', 
	email='$email', Universityuniversity_id = '$Universityuniversity_id',approval='$approval', status='$status' WHERE user_id = $user_id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated:<br> user_id = $user_id <br> user_name = $user_name<br> user_pass = $user_pass<br>email = $email<br>Universityuniversity_id= $Universityuniversity_id<br>email = $email<br> approval = $approval<br> status = $status";



	echo "<p><a href=read.php>READ all records</a>";

?>