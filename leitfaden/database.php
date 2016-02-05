<?php 
    include 'content.php';
?>

<!-- GET DATABASE CONTENT -->

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "Schule";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Connected successfully <br>";
}

// Select data
$sql = "SELECT `Username`, `Password`, `UserID` FROM `post-content` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Username: " . $row["Username"]. " - Password: " . $row["Password"]. " - UserID: " . $row["UserID"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>


<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$path_parts = pathinfo($actual_link);

// echo $path_parts['dirname'];

?>


<!-- <?=$actual_link; ?> -->

<?php
    include 'footer.php';
?>