<DOCTYPE html>
	<html>
		<head>

		</head>
		<body>

		<<img style = "position:relative;left:390px;" src="student.png" alt="">
		<?php
	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM student" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>Student_Id</th> <th>Student_Name</th> <th>pass</th><th>email</th><th>uni_id</th><th>aprrove</th><th>status</th><th>Delete</th> <th>Update</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";

		echo "<td>$user_id </td>";
		echo "<td> $user_name </td>";
		echo "<td> $user_pass </td>";
		echo "<td> $email </td>";
		echo "<td> $Universityuniversity_id </td>";
		echo "<td> $approval </td>";
		echo "<td> $status </td>";

		echo "<td> <a href = 'delete.php?user_id=$user_id'> Delete </a> </td>";
		echo "<td> <a href = 'update_input.php?user_id=$user_id&user_name=$user_name&user_pass=$user_pass'&email=$email&Universityuniversity_id=$Universityuniversity_id'&approval=$approval&status=$status'> Update </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";

	echo "<p><a href=createInput.php>CREATE a new record</a>";
?>

		</body>
	</html>
</DOCTYPE>





