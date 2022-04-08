<?php
require("utils/utils.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stringa = "Esercizio";
$intero = "1";
$stringa2 = "Prova di concatenazione";

echo "<h2>" . $stringa . $intero . "</h2>";
brecho($stringa2);

$intero = 3;
echo "<h2>" . $stringa . $intero . "</h2>";

$x = 10;
$y = 7;
brecho("$x + $y = " . ($x + $y));
brecho("$x - $y = " . ($x - $y));
brecho("$x * $y = " . ($x * $y));
brecho("$x / $y = " . ($x / $y));
brecho("$x % $y = " . ($x % $y));

$intero = 4;
echo "<h2>" . $stringa . $intero . "</h2>";

$num = 8;
echo "il valore è $num<br />Aggiungo 2. Adesso il valore è " . ($num += 2)
    . "<br />Sottraggo 4. adesso il valore è " . ($num -= 4)
    . "<br />Moltiplico per 5. adesso il valore è " . ($num *= 5)
    . "<br /> Divido per 3. adesso il valore è " . ($num /= 3)
    . "<br /> Incremento il valore di uno. adesso il valore è " . (++$num)
    . "<br />Decremento il valore di uno. adesso il valore è " . (--$num);

$intero++;
echo "<h2>" . $stringa . $intero . "</h2>";

$nome = "Paolo";
cool_dump($nome);
print_r($nome);

$utente['Nome'] = ['anno' => '1986', 'sesso' => 'M'];
cool_dump($utente);
print_r($utente);

$concat = con🐱("Ciao", " mamma");

