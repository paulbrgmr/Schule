<!DOCTYPE html>
<html>
<head>
    <title>Rechnen</title>
</head>
<body>

<form action="rechnen.php" method="POST">
    <p>
        <label for="zahl1"></label>
        <br>
        <input type="text" name="Zahl1" placeholder="Zahl1 eingeben" tabindex="1" required>
        <label for="zahl2"></label>
        <br>
        <input type="text" name="Zahl2" placeholder="Zahl2 eingeben" tabindex="2" required>
    </p>
    <p>
        <input type="submit" value="Berechnen" tabindex="3">
        <input type="reset" value="Reset" tabindex="4">
    </p>
</form>

</body>
</html>