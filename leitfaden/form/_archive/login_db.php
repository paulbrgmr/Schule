<?php 
    include '../subpage/content.php';
?>
    <?php

    $user_name = $_POST['username'];
    $user_password = $_POST['password'];
    $password = $user_password;

    // Erzeugung von Passwort-Hash
    // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt

    function saltPassword($password, $salt)
    {
        return hash('sha512', $password . $salt);
    }

    $random_num = mt_rand();

    // // Erzeugung von Passwort-Hash mit Salt
    $password_salt  = $password;
    $userID_salt    = $random_num; // Die UserID dient hier als einfache Möglichkeit für den Salt (hier als Beispiel 5121)
    $salt_salt      = $userID_salt;
    $saltedHash     = saltPassword($password_salt, $salt_salt);
    // echo $username . ' - ' . $user_password . ' : ' . $saltedHash . ' <br>(Salt: ' . $salt_salt . ')';
    
    // $saltedHash_verify = $_POST['password']; // Fiktive Funktion um salted Hash aus der Datenbank zu laden
    // $salt_verify = $random_num; // Fiktive Funktion um UserID abzurufen
    // if ($saltedHash == saltPassword($_POST['password'], $random_num)) // Prüfung mit Salt
    // {
    //      echo "Passwort stimmt überein";
    // }
    // else {
    //     echo "Nope";
    // }

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

    $sql = "INSERT INTO Freunde(Username, Password, Random_Salt) 
            VALUES ('$user_name', '$saltedHash', '$salt_salt')";


    if (!$conn->query($sql)) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    else {
        echo "Erfolgreich";
    }

    $conn->close();

    ?>

    <form method="post" action="">
        <label>Passwort Check:</label>
        <input type="password" name="password">
        <input type="submit">
        <input type="reset">
    </form>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "Schule";

    $user_password_input = $_POST['password'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Select data
    $sql = "SELECT 'Username', 'Password', 'Random_Salt' FROM 'Freunde'";
    $result = $conn->query($sql);

    function saltPassword($password, $salt)
    {
        return hash('sha512', $password . $salt);
    }




    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo 'UserID: ' . $row["UserID"] . '<br>';
        }
    }
    else {
        echo "0 results";
    }

    // $saltedHash = get_user_hash($_POST['Password']); // Fiktive Funktion um salted Hash aus der Datenbank zu laden
    // $salt = get_user_id($_POST['Random_Salt']); // Fiktive Funktion um UserID abzurufen
    
    // if (password_verify($user_password_input, $saltedHash)) {
    //     echo $user_password_input;
    // } else {
    //     echo 'Invalides Passwort.';
    // }
    
    $conn->close();
    ?>
</div>

<?php
    include '../subpage/footer.php';
?>