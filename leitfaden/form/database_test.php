<?php 
    include '../subpage/content.php';
?>

<div class="container">
    <h3 class="text-center">Datenbank</h3>
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="username">Username:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <label for="password">Passwort:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input id="password" type="text" class="form-control" name="password">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <hr>
                        <button class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
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

                // Erzeugung von Passwort-Hash
                // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt
                function saltPassword($password, $salt)
                {
                     return hash('sha512', $password . $salt);
                }

                $random_num = mt_rand();

                // Erzeugung von Passwort-Hash mit Salt
                $user_password = $input_password;
                $user_salt   = $random_num;
                $password_saltedHash    = saltPassword($user_password_input, $user_salt);
 
                $input_username = $_POST['username'];
                $input_password = $_POST['password'];

                // define variables and set to empty values
                $nameErr = $passwordErr = "";
                $name = $password = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                   if (empty($_POST["name"])) {
                     $nameErr = "Username ist erforderlich";
                   } else {
                     $name = validation_input($_POST["username"]);
                   }
                   
                   if (empty($_POST["password"])) {
                     $passwordErr = "Passwort ist erforderlich";
                   } else {
                     $password = validation_input($_POST["email"]);
                   }
                }

                function validation_input($data) {
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
                   return $data;
                }

                $sql = "INSERT INTO User_DB(Username, Password, Password_Salt, Timestamp)
                        VALUES ('$input_username', '$input_password', '$user_salt', NOW())";

                if (!$conn->query($sql)) {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                $conn->close();

                echo $nameErr . $passwordErr;
            ?>
        </div>
    </div>
</div>


<p>Passwort ändern:</p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="current_password">Aktuelles Passwort:</label>
                        </div>
                        <div class="col-md-6">
                            <input id="correct_password">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="new_password">Neues Passwort:</label>
                        </div>
                        <div class="col-md-6">
                            <input id="new_password">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="new_password_repeat">Neues wiederholen Passwort:</label>
                        </div>
                        <div class="col-md-6">
                            <input id="new_password_repeat">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $database = "Schule";

            $current_user_password      = $_POST['current_password'];
            $new_user_password          = $_POST['new_password'];
            $new_user_password_repeat   = $_POST['new_password_repeat'];

            // Create connection
            $conn = new mysqli($servername, $username, $password, $database);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Select data
            // $sql = "SELECT * FROM `User_DB` WHERE 1";
            // $sql = "UPDATE `User_DB` SET `Password`=[value-3] WHERE 1";
            $sql = "UPDATE `User_DB` SET `Password`='$new_user_password' WHERE 1";
            $result = $conn->query($sql);

            $input_userID = 1;

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if ($row['UserID'] == $input_userID) {
                        echo $row['Username'] . $row['UserID'] . '-' . $row['Password_Salt'];
                    }
                    // echo 'Username: ' . $row["Username"] . '<br>';
                    // echo 'Passwort: ' . substr($row["Password"],0,20) . '...';
                }
            }

            $conn->close();
        ?>


<?php
    include '../subpage/footer.php';
?>