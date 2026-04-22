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
    echo "<main>";

    echo "PDO1";

    echo "</main>";


}

else {

    
    require 'formularz.html';
}
?>

</body>
</html>
