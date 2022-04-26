<?php

	$user_id = $_GET["user_id"];

	$user_name = $_GET["user_name"];

	$user_pass = $_GET["user_pass"];

	$email = $_GET["email"];

	$Universityuniversity_id = $_GET["Universityuniversity_id"];

	$approval = $_GET["approval"];

	$status = $_GET["status"];


?>




<h1>Update Record</h1>



<form method=get action=update_reasult.php>



	user_id: <input type=int name=user_id > <br>



	user_name: <input type=text name=user_name > <br>


	<p>

	user_pass: <input type=text name=user_pass> <br>

	<p>

	email: <input type=text name=email > <br>
	<p>
	Universityuniversity_id: <input type=int name=Universityuniversity_id > <br>

	approval: <input type=int name=approval > <br>

	<p>

	status: <input type=int name=status > <br>

	<p>

	<input type=submit value=Update>

</form>