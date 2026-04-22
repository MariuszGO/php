<?php
session_start();

if(isset($_SESSION['login'])){

    session_destroy();
}

else {

    echo "NIE UDAŁO SIĘ ZALOGOWAĆ";
            require 'formularz.html';
}

echo "sesja zniszczpna";

?>