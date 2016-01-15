<!DOCTYPE html>
<html>
<head>
    <title>BMI Berechnung</title>
</head>
<body>
    <form method="POST" action="calc_bmi.php">
        <p>
            <label for="body_weight">Gewicht</label>
            <input type="text" name="body_weight" placeholder="Gewicht in kg">
        </p>
        <p>
            <label for="body_height">Höhe</label>
            <input type="text" name="body_height" placeholder="Höhe in cm">
        </p>
        <p>
            <input type="submit">
            <input type="reset">
        </p>
    </form>
</body>
</html>