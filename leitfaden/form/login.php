<?php 
    include '../subpage/content.php';
?>

</div>
<div class="bg-wrapper">
    <div class="sql-bg-img bg-img">
            <h1 class="text-center bg-headline">Login</h1>
        </div>
    </div>
</div>
<div class="container mtl">
    <div class="content-sql">
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <input type="text" placeholder="Username" name="username" class="form-control mts">
                        <input type="password" placeholder="Passwort" name="password" class="form-control mts">
                        <input type="text" placeholder="Hobby" name="hobby" class="form-control mts">
                    </div>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <hr>
                                <!-- <button class="btn btn-default btn-block" type="reset">Reset</button> -->
                            </div>                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <!-- <div class="btn btn-default btn-block" type="submit">Senden</div> -->
                                <button class="btn btn-default btn-block" type="submit">Benutzer anlegen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

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



    // Erzeugung von Passwort-Hash
    // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt

    function saltPassword($password, $salt)
    {
        return hash('sha512', $password . $salt);
    }

    $random_num = mt_rand();

    // Erzeugung von Passwort-Hash mit Salt
    $password_salt  = $input_password;
    $userID_salt    = $random_num;
    $salted         = $userID_salt;
    $saltedHashPw   = saltPassword($password_salt, $salted);

    $sql = "INSERT INTO Freunde(Username, Password, Random_Salt, `TimeStamp`) 
            VALUES ('$input_username', '$input_password', '$saltedHashPw', NOW())";
    // $prepared = $conn->prepare($sql);
    // $prepared->bind_param("sss", $input_username, $saltedHashPw, $userID_salt);
    // $prepared->execute();

    // $conn->close();
    // Select data
    $sql = "SELECT * FROM `Freunde` WHERE 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if ($input_username == $row["Username"]) {
                echo "Benutzer anlegen erfolgreich";
            }
        }
    } else {
        echo "Benutzer anlegen fehlgeschlaen";
    }

?>




<?php
    include '../subpage/footer.php';
?>