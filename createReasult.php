
<img style = "position:relative; left:390px;" src="student.png">
<h1 style = "position:relative; left:390px;">The new student Data</h1>
<?php

$user_id= $_GET["user_id"];

$user_name = $_GET["user_name"];

$user_pass = $_GET["user_pass"];

$email = $_GET["email"];

$Universityuniversity_id = $_GET["Universityuniversity_id"];

$approval = $_GET["approval"];

$status = $_GET["status"];





require_once('db_connect.php');

$connect = mysqli_connect( HOST, USER, PASS, DB )

    or die("Can not connect");



mysqli_query( $connect, "INSERT INTO student VALUES ( '$user_id', '$user_name', '$user_pass', '$email', 
'$Universityuniversity_id', '$approval', '$status')" )



    or die("Can not execute query why");



echo "Record inserted:<br> user_id = $user_id <br> user_name = $user_name<br> user_pass = $user_pass<br> email = $email<br> Universityuniversity_id = $Universityuniversity_id<br>
approval = $approval<br> status = $status";



echo "<p><a href=read.php>READ all records</a>";


?>
