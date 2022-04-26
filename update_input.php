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



<form method=get action=update_result.php>



	user_id: <input type=int name=user_id value='<?php echo $user_id; ?>'> <br>



	user_name: <input type=text name=user_name value='<?php echo $user_name; ?>'> <br>


	<p>

	user_pass: <input type=text name=user_pass value='<?php echo $user_pass; ?>'> <br>

	<p>

	email: <input type=text name=email value='<?php echo $email; ?>'> <br>
	<p>
	Universityuniversity_id: <input type=int name=Universityuniversity_id value='<?php echo $Universityuniversity_id; ?>'> <br>

	approval: <input type=int name=approval value='<?php echo $approval; ?>'> <br>

	<p>

	status: <input type=int name=status value='<?php echo $status; ?>'> <br>

	<p>

	<input type=submit value=Update>

</form>