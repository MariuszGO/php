<?php
session_start();

// Jeśli użytkownik już jest zalogowany, przenieś go do panelu
if (isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] === true) {
    header("Location: panel.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
</head>
<body>
    <h2>Logowanie</h2>

    <form action="login.php" method="post">
        <label>Login:</label><br>
        <input type="text" name="login"><br><br>

        <label>Hasło:</label><br>
        <input type="password" name="haslo"><br><br>

        <input type="submit" value="Zaloguj">
    </form>

    <?php
    if (isset($_SESSION['blad'])) {
        echo "<p style='color:red;'>" . $_SESSION['blad'] . "</p>";
        unset($_SESSION['blad']); // usuń komunikat po wyświetleniu
    }
    ?>
</body>
</html>