<?php
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "ellenvandewate", "raoThah7","ellenvandewate");
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
		exit();
	}

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "DELETE FROM Members WHERE LibraryCardNum = '$username' AND Password = '$password'";

    if($mysqli->query($sql) === TRUE){
		echo "Account deleted successfully.";
	}
	else{
		echo "Account could not be deleted.";
	}
    
	$mysqli->close();

?>
