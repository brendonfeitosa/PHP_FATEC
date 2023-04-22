<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

var_dump($cars);
echo "<hr />";
print_r($cars);
echo "<hr />";
foreach ($cars as $x) {
  echo $x;
}

?>