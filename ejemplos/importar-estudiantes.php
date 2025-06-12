<?php
$fileHandle = fopen("estudiantes.csv", "r");
while (($row = fgetcsv($fileHandle, 0, ";")) !== FALSE) {
  var_dump($row);
  //$row is an array of all the columns in the csv regardless of commas in the dat
}
?>