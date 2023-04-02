<?php
    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die("Connection Failed : ". $conn->connect_error);
    }

    // Retrieve data from the database
    $sql = "SELECT CommunityName, About, Category, email, PhoneNumber, Requirments FROM host";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Community Name: " . $row["CommunityName"]. "<br>";
            echo "About: " . $row["About"]. "<br>";
            echo "Category: " . $row["Category"]. "<br>";
            echo "Email: " . $row["email"]. "<br>";
            echo "Phone Number: " . $row["PhoneNumber"]. "<br>";
            echo "Requirements: " . $row["Requirments"]. "<br><br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>
