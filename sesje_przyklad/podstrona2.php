<?php
session_start();

if(isset($_SESSION['login'])){

    echo "działa";
    require 'menu.php';

    echo "POD2";
}

else {

    echo "nie działa";
    require 'formularz.html';
}
?>