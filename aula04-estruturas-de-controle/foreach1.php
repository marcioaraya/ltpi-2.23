<?php
$carros = ["chevrolet"=>"onix", "fiat"=>"argo", "volkswagen"=>"up", "renault"=>"kwid"];

foreach($carros as $c){
    echo $c . "<br>";
}

foreach($carros as p=>$c){
    echo $p . " - " . $c . "<br>";
}


