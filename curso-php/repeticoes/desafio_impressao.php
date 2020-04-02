<div class="titulo">Desafio Impressão</div>

<?php
$array = [
    "AAA",
    "BBB",
    "CCC",
    "DDD",
    "EEE",
    "FFF"
];

foreach($array as $i => $cont) {
    if($i % 2 == 0){
        echo $cont . "<br>";
    }
}

echo "<br>";
echo "<hr>";

for($cont = 0; $cont < count($array); $cont++) {
    if($cont % 2 == 0) {
        echo $array[$cont] . "<br>";
    }
}
