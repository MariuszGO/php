<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Strona prezentująca wykorzystanie sesji</title>
</head>
<body>

<?php
session_start();

if(isset($_SESSION['login'])){

    require 'menu.php';
}

else {

    if($_POST["login"] == "admin" && $_POST["password"] == "admin") {

        echo "UDAŁO SIĘ ZALOGOWAĆ";
        
        $_SESSION['login'] = $_POST['login'];

        require 'menu.php';
       
        }
        else{
    
            echo "NIE UDAŁO SIĘ ZALOGOWAĆ";
            require 'formularz.html';   
        }
}
?>
    
</body>
</html>

