<style>
    .row {
    display: flex;
    flex-wrap: wrap;
}

.box1 {
    flex: 1;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    background-color: #f2f2f2;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.5) 50%), url("outdoor.png");

    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
    
}
.box2 {
    flex: 1;
    padding: 10px;
    margin: 10px;
    border: 1px solid #ccc;
    background-color: #f2f2f2;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.5) 50%), url("indoor.png");

    background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
    
}


.box:nth-child(odd) {
    background-color: #ddd;
}

.box .index {
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 10px;
}

.box p {
    margin: 10;
    line-height: 1.5;
    color: white;
    
}

@media (max-width: 767px) {
    .row {
        flex-direction: column;
    }
    .box {
        width: 100%;
    }
}

</style>

<?php
    // Database connection
    $conn = new mysqli('localhost','root','','test');
    if($conn->connect_error){
        die("Connection Failed : ". $conn->connect_error);
    }

    // Retrieve data from the database
    $sql = "SELECT CommunityName, About, Category, email, PhoneNumber, Description FROM host";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $i = 1;
        // output data of each row
        echo '<div class="row">';
        while($row = $result->fetch_assoc()) {
           
            if ($row["Category"] === "Outdoor"){
                echo '<div class="box1">';
             }
             else{
                echo '<div class="box2">';
             }
            echo '<div class="index">' . $i . '</div>';
            echo '<p><strong>Community Name:</strong> ' . $row["CommunityName"]. '</p>';
            echo '<p><strong>About:</strong> ' . $row["About"]. '</p>';
            echo '<p><strong>Category:</strong> ' . $row["Category"]. '</p>';
            echo '<p><strong>Email:</strong> ' . $row["email"]. '</p>';
            echo '<p><strong>Phone Number:</strong> ' . $row["PhoneNumber"]. '</p>';
            echo '<p><strong>Description:</strong> ' . $row["Description"]. '</p>';
            echo '</div>';
            if ($i % 2 == 0) {
                echo '</div><div class="row">'; // close the previous row and start a new one
            }
            $i++;
        }
        echo '</div>'; // close the last row
    } else {
        echo "0 results";
    }

    $conn->close();
?>
