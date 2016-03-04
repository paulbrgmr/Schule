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

    $input_vorname  = $_POST['vorname'];
    $input_nachname = $_POST['nachname'];
    $input_hobby    = $_POST['hobby'];

    $sql = "INSERT INTO AJAX_Form(Vorname, Nachname, Hobby)
                VALUES ('$input_vorname', '$input_nachname', '$input_hobby')";

    if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else {
        echo "Datenbankeintrag erfolgreich! <br>
        Folgende Werte wurden übermittelt: <br>
        Vorname: " . $input_vorname . "<br>" . "Nachname: " . $input_nachname . "<br>" . "Hobby: " . $input_hobby . "<br>";
    }

    $conn->close();
?>

<hr>
<p>In der Datenbank stehen nun folgende Werte:</p>

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

    // Select data
    $sql = "SELECT * FROM `AJAX_Form`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 'Vorname: ' . $row["Vorname"] . 
                ' - Nachname: ' . $row["Nachname"] . 
                ' - Hobby: ' . $row["Hobby"] . '<br>';
        }
    }
    else {
        echo "0 results";
    }
?>