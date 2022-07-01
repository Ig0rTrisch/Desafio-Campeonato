<?php

$times = array(
    "Gremio",
    "Flamengo",
    "Palmeiras nao tem mundial",
    "Internacional o melhor",
    "Vasco"
);

printData($times);
array_unshift($times, "Ponte preta","Goiás");


printData($times);
array_shift($times);
printData($times);

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