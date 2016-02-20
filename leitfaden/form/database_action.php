<?php
    // define variables and set to empty values
    $nameErr = $passwordErr = $hobbyErr = "";
    $name = $password = $hobby = "";

    function validation_input($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $nameErr = "Name ist erforderlich";
        }
        else {
            $correct_username = validation_input($_POST["username"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password ist erforderlich";
        }
        else {
            $correct_password = validation_input($_POST["password"]);
        }
    }

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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!(empty($_POST["username"])) && !(empty($_POST["password"]))) {
            $user_hobby = $_POST['hobby'];

            // Erzeugung von Passwort-Hash
            // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt
            function saltPassword($password, $salt)
            {
                 return hash('sha512', $password . $salt);
            }

            $random_num = mt_rand();

            // Erzeugung von Passwort-Hash mit Salt
            $user_password          = $correct_password;
            $user_salt              = $random_num;
            $password_saltedHash    = saltPassword($user_password, $user_salt);

            $sql = "INSERT INTO User_DB(Username, Password, Password_Salt, Timestamp, Hobby)
                    VALUES ('$correct_username', '$password_saltedHash', '$user_salt', NOW(), '$user_hobby')";

            if (!$conn->query($sql)) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    $conn->close();
?>