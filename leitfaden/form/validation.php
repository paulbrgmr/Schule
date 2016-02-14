<?php 
    include '../subpage/content.php';
?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name ist erforderlich";
   } else {
     $name = validation_input($_POST["name"]);
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "E-Mail ist erforderlich";
   } else {
     $email = validation_input($_POST["email"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = validation_input($_POST["comment"]);
   }

   if (empty($_POST["gender"])) {
     $genderErr = "Geschlecht ist erforderlich";
   } else {
     $gender = validation_input($_POST["gender"]);
   }
}

function validation_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h3 class="text-center">Formular Validierung</h3>
<div class="row">
    <div class="col-xs-12 col-md-6">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <p>Name*:</p> <input type="text" name="name" tabindex="1">
           <p class="text-danger"><?php echo $nameErr;?></p>
           <p>E-Mail*:</p><input type="text" name="email" tabindex="2">
           <p class="text-danger"><?php echo $emailErr;?></p>
           <p>Comment:</p> <textarea name="comment" rows="3" cols="40" tabindex="3"></textarea>
           <p>Gender*:</p>
            <div class="radio">
                <input type="radio" name="gender" id="female" value="Frau">
                <label for="female">
                    Frau
                </label>
            </div>
            <div class="radio">
                <input type="radio" name="gender" id="male" value="Mann">
                <label for="male">
                    Mann
                </label>
            </div>
            <p class="text-danger"><?php echo $genderErr;?></p>
            <p><span class="error">* erforderliche Felder</span></p>
            <div class="row">
                <div class="col-xs-4">
                   <button class="btn btn-primary btn-block" type="submit" name="submit" value="Submit" tabindex="4">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-xs-12 col-md-6">
        <?php
            echo "<p>Deine Eingabe:</p>";
            if (($name || $email || $comment || $gender) != '') {
                if ($comment == '') {
                    $comment = 'Kein Kommentar abgeschickt.';
                }
                echo '<p> Name: ' . $name . '</p>';
                echo '<p> E-Mail: ' . $email . '</p>';
                echo '<p> Kommentar: ' . $comment . '</p>';
                echo '<p> Geschlecht: ' . $gender . '</p>';
            }
        ?>
    </div>
</div>

<?php
    include '../subpage/footer.php';
?>