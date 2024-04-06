<?php

$movies =[

   "L\'île au trésor" => ["Youri Yakovlev","Evgeniy Papernyy","Anatoliy Dyachenko"],
    "Le Club du suicide" => ["Oleg Dahl","Igor Dmitriev","Askhab Abakarov"],
    "Jekyll" => ["Matt Keeslar","Alanna Ubach","Abigail Spencer"],
];

foreach($movies as $movie => $actors ){
    echo "Dans le film $movie, les principaux acteurs sont : <br />";
    foreach($actors as $movie => $actor ){
        echo $actor . ' ';
    }
    echo "<br/>";
};