<?php

if(isset($_COOKIE['imie'])){
    $i = $_COOKIE['ile'];
    $i++;
    echo "Dzień dobry {$_COOKIE['imie']} {$_COOKIE['naz']} masz {$_COOKIE['w']} - byłeś już na tej stronie $i razy";
    setcookie("imie", $_COOKIE['imie'], time() + 5); 
    setcookie("naz", $_COOKIE['naz'], time() + 5);
    setcookie("w", $_COOKIE['w'], time() + 5);
    setcookie("ile",$i,time()+5);
} else {
?>
<form action="cookie20.php" method="get">
    <label for="imie">Imie: </label>
    <input type="text" name="imie" id="imie"><br>
     <label for="nazwisko">Imie: </label>
    <input type="text" name="nazwisko" id="nazwisko"><br>
    <lebel for="wiek">Wiek: </label>
    <select name="wiek" id="wiek">
    <?php
    for ($i = 0; $i <= 100; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
    </select><br>
    <button type="submit">Wyślij</button>
</form> 
<?php

}

?>