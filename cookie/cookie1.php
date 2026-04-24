<?php

if(isset($_COOKIE['ile'])){

    $i= $_COOKIE["ile"];
    $i++; //$i=$i+1;

    echo "Dzień dobry {$_COOKIE['imie']} byłeś już na tej stronie $i";
    setcookie("ile",$i,time()+5);
    
    }   
    else{
        $i=0;
        echo "Nie byłeś na tej stronie";
        setcookie("imie","Jan",time()+5);
        setcookie("ile",$i,time()+5);
    }




?>