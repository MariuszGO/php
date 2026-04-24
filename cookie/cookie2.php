<?php

if(isset($_COOKIE['imie'])){
    $i = $_COOKIE['ile'];
    $i++;
    echo "Dzień dobry {$_COOKIE['imie']} - byłeś już na tej stronie $i razy";
    setcookie("imie", $_COOKIE['imie'], time() + 5); 
    setcookie("ile",$i,time()+5);
} else {
    header("Location: cookie2formularz.php");
    exit();
}

?>