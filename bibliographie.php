<?php

$books = [
    "La Flèche noire" => 1888,
    "L'Île au trésor" => 1883,
    "Le Trafiquant d'épaves " => 1992,
];
asort($books);
foreach($books as $key => $book ){
    echo $book ." - ". $key . "<br />";
}