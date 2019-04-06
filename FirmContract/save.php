<?php
	session_start();
	if(isset($_POST["id"], $_POST["name"], $_POST["shef"], $_POST["adr"]))
	{
		if ($_POST["name"] == '' || $_POST["shef"] == '' || $_POST["adr"] == '')
		{
			exit ("You did not fill all the fields");
		}
		$id = $_POST["id"];
		$name = $_POST["name"];
		$shef = $_POST["shef"];
		$adr = $_POST["adr"];
		include ("db.php");
		$query ="UPDATE firm SET name='$name', shef='$shef', address='$adr' WHERE id_firm='$id'";
		$result = mysqli_query($db, $query) or die("Error " . mysqli_error($db));
	}
?>
