<?php

	$user_id = $_GET["user_id"];



	require_once('db_connect.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM `student` WHERE user_id=$user_id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=read.php>READ all records</a>";

?>