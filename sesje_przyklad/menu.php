<?php
echo"<header><nav id='prawa'><div id='przyciski'>";
    echo "<a href='podstrona1.php'> Strona 1</a>";
    echo "<a href='podstrona2.php'> Strona 2</a>";
    echo "<a href='podstrona3.php'> Strona 3</a>";
    echo "<a href='wyloguj.php'> Wyloguj</a>";
echo "</div></nav>";
    echo"<div id='lewa'>";
echo "<p id='log'>Jesteś zalogowany jako: ". $_SESSION['login'] . "</p>";
echo "</div></header>";
    ?>