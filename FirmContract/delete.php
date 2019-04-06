<?php
	session_start();
	if(isset($_POST['id']))
	{
		$id = $_POST['id'];
		include ("db.php");
		mysqli_query($db, "DELETE FROM firm WHERE id_firm='$id'");
	}
?>
