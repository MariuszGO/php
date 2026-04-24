<?php

if(isset($_COOKIE['imie'])){

    echo "Dzień dobry {$_COOKIE['imie']} byłeś już na tej stronie";

    }   
    else{
        echo "Nie byłeś na tej stronie";
        setcookie("imie","Jan",time()+5);
    }




?>