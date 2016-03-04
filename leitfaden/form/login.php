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
    <div class="row">
        <div class="col-sm-4">
            <form class="ajax-login-create" method="post" action="login-new.php">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4>Benuter erstellen</h4>
                                <input type="text" placeholder="Username" name="username" class="form-control mts">
                                <input type="password" placeholder="Passwort" name="password" class="form-control mts">
                                <input type="text" placeholder="Hobby" name="hobby" class="form-control mts">
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <hr>
                                        <button class="btn btn-primary btn-block" type="submit">Senden</button>
                                        <div class="text-center mtm" id="login-ajax"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
    <div class="row mbl">
        <div class="col-xs-12 col-sm-3">
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#php">
                Behind the scenes
            </button>

            <!-- Modal -->
            <div class="modal fade" id="php" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Validierung</h4>
                        </div>
                        <div class="modal-body">
                            <?php 
                                highlight_string(
'<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Schule";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $input_username = $_POST["username"];
    $input_password = $_POST["password"];



    // Erzeugung von Passwort-Hash
    // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt

    function saltPassword($password, $salt)
    {
        return hash("sha512", $password . $salt);
    }

    $random_num = mt_rand();

    // Erzeugung von Passwort-Hash mit Salt
    $password_salt  = $input_password;
    $userID_salt    = $random_num;
    $salted         = $userID_salt;
    $saltedHashPw   = saltPassword($password_salt, $salted);

    $sql = "INSERT INTO Freunde(Username, Password, Random_Salt, `TimeStamp`) 
            VALUES ("$input_username", "$input_password", "$saltedHashPw", NOW())";

    $conn->close();
?>');
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>