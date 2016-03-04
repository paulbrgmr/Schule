<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Schule";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $input_username = $_POST['username'];
    $input_password = $_POST['password'];
    $input_hobby = $_POST['hobby'];

    // Erzeugung von Passwort-Hash
    // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt
    function saltPassword($password, $salt) {
        return hash('sha512', $password . $salt);
    }

    $random_num = mt_rand();

    // Erzeugung von Passwort-Hash mit Salt
    $password_salt  = $input_password;
    $userID_salt    = $random_num;
    $salted         = $userID_salt;
    $saltedHashPw   = saltPassword($password_salt, $salted);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sql = "INSERT INTO `Freunde`(`Username`, `Password`, `Random_Salt`, `TimeStamp`, `Hobby`)
                VALUES ('$input_username', '$saltedHashPw', '$salted', NOW(), '$input_hobby')";
    
        if (!$conn->query($sql)) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        else {
            echo "Benutzer angelegt";
        }
    };
 
    // $prepared = $conn->prepare($sql);
    // $prepared->bind_param("sss", $input_username, $saltedHashPw, $userID_salt);
    // $prepared->execute();

    // $conn->close();
    // Select data
    // $sql = "SELECT * FROM `Freunde` WHERE 1";
    // $result = $conn->query($sql);

    // if ($result->num_rows > 0) {
    //     // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //         if ($input_username == $row["Username"]) {
    //             echo "Benutzer anlegen erfolgreich";
    //         }
    //     }
    // } else {
    //     echo "Benutzer anlegen fehlgeschlaen";
    // }

?>