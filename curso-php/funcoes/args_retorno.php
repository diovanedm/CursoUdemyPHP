<div class="titulo">Argumentos e Retorno</div>

<?php
function soma($a, $b) {
    return $a + $b;
}

echo soma(5, 15);
echo "<br>";
$variavel = 1;
echo $variavel . "<br>";

function trocaValorDeVerdade(&$a, $valor) {
    $a = $valor;
    echo $a . "<br>";
}
trocaValorDeVerdade($variavel, 500);
echo $variavel;


