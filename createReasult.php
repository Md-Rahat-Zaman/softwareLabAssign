
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



mysqli_query( $connect, "INSERT INTO t0 VALUES ( '', '$f0', '$f1' )" )

    or die("Can not execute query");



echo "Record inserted:<br> f0 = $f0 <br> f1 = $f1";



echo "<p><a href=read.php>READ all records</a>";

user_id	
user_name	
user_pass	
email	
Universityuniversity_id	
approval	
status

?>
