<?php
	require_once 'db_connfig.php';

	$sql = "SELECT * FROM members";
	$result = $conn->query($sql);


	while($row = $result->fetch_assoc()){
		
		echo $row['id'] . " : " . $row['fname'] . " : " . $row['lname'] . " : " . $row['contact'] . "<br>";
	}
	$conn->close();