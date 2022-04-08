<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require "models/Car.php";
require "models/ElectricCar.php";
require "utils/utils.php";


$s1 = "How";
$s1 .= "dy<br />";
echo $s1;

$a = 2;
$b = "2";

if ($a == $b) echo "Uguale";
if ($a === $b) echo "Identico";

$values = "Paolo;Forgia;Via FFF 69";

$data = explode(";", $values);

//echo json_encode(array("dato" => $data));

$array = ["a", "b", "c"];
$array[] = "d";

$rubrica = [];
$rubrica[] = ["Nome" => "Paolo", "Cognome" => "Forgia", "Indirizzo" => "Via FFF 69"];

$nome = $rubrica[0]["Nome"];
//echo "Hello $nome";

echo "<pre>";
var_dump($rubrica);
echo "</pre>";
//echo implode(", ", $array);


$car = new Car("XXXXX", "VW", "Golf");
$car2 = new ElectricCar("XXXXX", "VW");
$car2->setBatterySize(40000);

cool_dump($car2);

