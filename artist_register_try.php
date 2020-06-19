0<?php
	include "connect.php";

	//echo "You are here, you have a quiz?";
	$artnum = $_POST["artnum"];
	$fname = $_POST["txtFname"];
	$lname = $_POST["txtLname"];
	$phone = $_POST["txtPhone"];
	$qry = "INSERT INTO Artist VALUES(".$artnum.",'".$lname."', '".$fname."', '".$phone."')";


	//echo $qry;
	if ($con->query($qry)) {
		$msg = "Artist Registered";
	}
	else
		$msg = "Error!";

	header("Location:artist_register.php?Message=$msg")
?>
