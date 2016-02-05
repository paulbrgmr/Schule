<?php 
    include '../subpage/content.php';
?>

<div class="content-formular-form">
    <h1 class="text-center">GET</h1>
    <form method="POST">
        <label for="Birthdate">
            Geburtsdatum:
            <input type="text" id="Birthdate" placeholder="20.06.2016" name="birthday" value="17.01.1994">
        </label>
        <input type="submit">
        <input type="reset">
    </form>
    <hr>
<!--     <form method="GET">
        
    </form> -->
</div>


<?php 

$birthday = $_POST['birthday'];


# object oriented
$from = new DateTime($birthday);
$to   = new DateTime('today');
echo = $from->diff($to)->birth;

// echo $form . ' ' . $to;

// echo $birthdate;
    // echo $date . ' Jahre alt';
// if ($date > 0) {
//     echo $date . ' Jahre alt';
// }

# procedural
// echo y;
// echo date_diff(date_create('1970-02-01'), date_create('today'))->y;

?>

<?php
    include '../subpage/footer.php';
?>