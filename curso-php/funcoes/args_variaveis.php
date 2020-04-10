<div class="titulo">Argumento Variáveis</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(4,5,6,7,8,9) . "<br>";

// Como passar valores variáveis?

//Faça uma soma com os valores passado por paramentro
function somaCompleta(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

//Faça uma soma com o array passado por parâmetro
function somaCompleta2(...$numeros) {
    $soma = 0;
    foreach($numeros as $num) {
        $soma += $num;
    }
    return $soma;
}

$soma = somaCompleta(1,2,3,4,5,6);
echo $soma;

echo "<br>";

$array = [5,4,3,8,4,6];
$soma2 = somaCompleta2(...$array);
echo $soma2;

echo "<br>";

//Faça uma função aonde é passado o titular e depois os dependentes

function conveniados($titular, ...$dependentes) {
    echo "Titular: $titular <br>";

    foreach($dependentes as $depen) {
        echo "Dependentes $depen <br>";
    }
}

conveniados("Marcia Regina", "Diovane", "Diego", "Carlos");

echo "<br>";

conveniados("Carlos");

echo "<br>";

conveniados("Carlos", "Diego");
