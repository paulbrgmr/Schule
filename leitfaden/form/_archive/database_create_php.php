<?php 
    include '../subpage/content.php';
?>

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Schule";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$vorname = $_POST['Vorname'];
$nachname = $_POST['Nachname'];
$alter = $_POST['Alter'];

$sql = "INSERT INTO Freunde(Vorname, Nachname, Geburtsjahr) VALUES ('$vorname', '$nachname', '$alter')";


if (!$conn->query($sql)) {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

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

// Select data
$sql = "SELECT * FROM `Freunde` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 'UserID: ' . $row["UserID"] . ' Vorname: ' . $row["Vorname"] . ' Nachname: ' . $row["Nachname"] . ' Geburtsjahr: ' . $row["Geburtsjahr"] . '<br>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<?php
    include '../subpage/footer.php';
?>