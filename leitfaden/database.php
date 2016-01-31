<?php 
    include 'content.php';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


<?php

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$path_parts = pathinfo($actual_link);

echo $path_parts['dirname'];

?>


<!-- <?=$actual_link; ?> -->

<?php
    include 'footer.php';
?>