<?php
session_start();

$poprawny_login = "admin";
$poprawne_haslo = "admin";

// Sprawdzenie, czy formularz został wysłany
if (isset($_POST['login']) && isset($_POST['haslo'])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if ($login === $poprawny_login && $haslo === $poprawne_haslo) {
        $_SESSION['zalogowany'] = true;
        $_SESSION['login'] = $login;
        $_SESSION['rola'] = "administrator";
        $_SESSION['liczba_odwiedzin'] = 0;

        header("Location: panel.php");
        exit();
    } else {
        $_SESSION['blad'] = "Nieprawidłowy login lub hasło.";
        header("Location: index.php");
        exit();
    }
} else {
    $_SESSION['blad'] = "Wypełnij wszystkie pola.";
    header("Location: index.php");
    exit();
}
?>