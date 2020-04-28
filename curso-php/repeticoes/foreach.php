<div class="titulo">Foreach</div>

<?php

$array = [
    500 => "segunda",
    "terça",
    "quarta",
    "quinta",
    "sexta",
    "sabado",
    "domingo"    
];

foreach($array as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

foreach($array as $i => $valor) {
    echo "$i => $valor <br>";
}

$matrix = array(
    array(1, 2, 3, 4),
    array(5, 6, 7, 8)
);

echo "<hr>";

foreach($matrix as $linha) {
    foreach($linha as $valor) {
        echo $valor . "<br>";
    }
}