<?php 
    include '../subpage/content.php';
?>

<h1 class="text-center">POST</h1>

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
    include '../subpage/footer.php';
?>