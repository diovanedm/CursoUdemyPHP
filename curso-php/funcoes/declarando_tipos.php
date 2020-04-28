<div class="titulo">Declarando Tipos</div>

<?php
function somar(int $a, int $b) {
    echo "<span> Somanto $a + $b = </span>";
    return $a + $b;
}

echo somar(1, 2) . "<br>";

function somar2(...$numeros) : int{
    $soma = 0;
    foreach ($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

echo $soma = somar2(1,2,3.6,4,5);