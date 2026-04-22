<?php
session_start();

if(isset($_SESSION['login'])){

    require 'menu.php';
}

else {

    if($_POST["login"] == "uczen123" && $_POST["password"] == "uczen123") {

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