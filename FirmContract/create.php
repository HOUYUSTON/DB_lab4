<?php
	session_start();
	if(isset($_POST["name"], $_POST["shef"], $_POST["adr"]))
	{
		if ($_POST["name"] == '' || $_POST["shef"] == '' || $_POST["adr"] == '')
		{
			exit ("You did not fill all the fields");
		}
		$name = $_POST["name"];
		$shef = $_POST["shef"];
		$adr = $_POST["adr"];
		include ("db.php");
		$query ="INSERT INTO firm (name, shef, address) VALUES ('$name', '$shef', '$adr')";
		$result = mysqli_query($db, $query) or die("Error " . mysqli_error($db));
	}
?>
