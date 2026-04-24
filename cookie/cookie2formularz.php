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