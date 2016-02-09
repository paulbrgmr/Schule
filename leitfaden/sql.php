<?php 
    include 'content.php';
?>

</div>
<div class="bg-wrapper">
    <div class="sql-bg-img bg-img">
            <h1 class="text-center bg-headline">SQL</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="content-sql">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
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
</div>

<?php
    include 'footer.php';
?>