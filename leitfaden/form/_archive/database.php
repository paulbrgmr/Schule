<?php 
    include '../subpage/content.php';
?>

<form method="POST" action="database_create_php.php">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Vorname">Vorname</label>
                </div>
                <div class="col-lg-6">
                   <input type="text" name="Vorname" placeholder="Vorname" id="Vorname">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Nachname">Nachname</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="Nachname" placeholder="Nachname" id="Nachname">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-6">
                    <label for="Alter">Alter</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" name="Alter" placeholder="Alter" id="Alter">
                </div>
            </div>
        </div>
    </div>
    <input type="submit">
    <input type="reset">



        <?php 
    // Erzeugung von Passwort-Hash
    // Funktion die Passwort mit Hash kombiniert und den so erzeugten hash zurückgibt
    function saltPassword($password, $salt)
    {
         return hash('sha512', $password . $salt);
    }

    $random_num = mt_rand();

    // Erzeugung von Passwort-Hash mit Salt
    $password_salt = "paul";
    $userID_salt   = $random_num; // Die UserID dient hier als einfache Möglichkeit für den Salt (hier als Beispiel 5121)
    $salt_salt = $userID_salt;
    $saltedHash    = saltPassword($password_salt, $salt_salt);
    echo $password_salt . ' : ' . $saltedHash . ' <br>(Salt: ' . $salt_salt . ')';
    
    // Prüfung (beispielhaft)
    // $saltedHash = get_user_hash($_POST['username']); // Fiktive Funktion um salted Hash aus der Datenbank zu laden
    // $salt = get_user_id($_POST['username']); // Fiktive Funktion um UserID abzurufen
    // if ($saltedHash == saltPassword($_POST['password'], $salt)) // Prüfung mit Salt
    // {
    //      echo "Passwort stimmt überein";
    // }

    ?>
</form>

<?php
    include '../subpage/footer.php';
?>