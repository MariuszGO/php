<?php

if(isset($_GET['imie'])){
    $imie = $_GET['imie'];

    echo "Nie byłeś na tej stronie";
$i=0;
    setcookie("imie", $imie, time() + 5);
    setcookie("ile",$i,time()+5);

    header("Location: cookie2.php");
    exit();
}

?>