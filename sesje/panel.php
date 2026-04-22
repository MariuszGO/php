<?php
session_start();

// Ochrona strony
if (!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] !== true) {
    header("Location: index.php");
    exit();
}

// Zliczanie wejść na stronę
$_SESSION['liczba_odwiedzin']++;
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel użytkownika</title>
</head>
<body>
    <h2>Panel użytkownika</h2>

    <p>Witaj, <?php echo $_SESSION['login']; ?>!</p>
    <p>Twoja rola: <?php echo $_SESSION['rola']; ?></p>
    <p>Liczba odwiedzin tej strony w sesji: <?php echo $_SESSION['liczba_odwiedzin']; ?></p>

    <a href="logout.php">Wyloguj się</a>
</body>
</html>