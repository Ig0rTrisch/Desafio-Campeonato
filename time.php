<?php

$times = array(
    "Gremio",
    "Flamengo",
    "Palmeiras nao tem mundial",
    "Internacional o melhor",
    "Vasco"
);
///adiciona no inicio///
printData($times);
array_unshift($times, "Ponte preta","Goiás");
///adiciona no final///
printData($times);
array_push($times, "Barcelona", "PSG");
///remove o inicio///
printData($times);
array_shift($times);
///remove o final///
printData($times);
array_pop($times);
printData($times);



function printData($array)
{
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
    echo "<br>";
}