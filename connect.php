<?php

	$CommunityName = $_POST['CommunityName'];
	$About = $_POST['About'];
    $Category = $_POST['Category'];
	$email = $_POST['email'];
	$PhoneNumber = $_POST['PhoneNumber'];
	$Description = $_POST['Description'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
		
	} else {
		
		$stmt = $conn->prepare("insert into host(CommunityName, About, Category, email, PhoneNumber, Description) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssss", $CommunityName, $About, $Category, $email, $PhoneNumber, $Description );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>