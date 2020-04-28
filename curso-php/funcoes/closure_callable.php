<div class="titulo">Closure e Calable</div>

<?php
$soma1 = function($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo is_callable($soma1) ? "Sim" : "Não";

echo "<br>";

echo soma2(2, 3) . ' ';
echo is_callable($soma1) ? "Sim" : "Não";

var_dump($soma1);
echo "<br>";
var_dump(soma2(2, 3));

