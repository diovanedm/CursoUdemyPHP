<div class="titulo">Laço for</div>

<?php
// contador de 0 a 4
for($count = 0; $count <= 5; $count++) {
    echo "{$count} <br>";
} echo "<hr>";

// continuou com o contador até 10
for(; $count <= 10; $count++) {
    echo $count . "<br>" ;
} echo "<hr>";

// imprimir um array usando for 
$array = array(
    "segunda",
    "terça",
    "quarta",
    "quinta",
    "sexta",
    "sabado",
    "domingo"
);

for($count = 0; $count < count($array); $count++) {
    echo $array[$count] . "<br>";
} echo "<hr>";

// some cada indice de um array com os valores de outro array
$dados1 = array(4, 2, 1, 5, 6);
$dados2 = array(3, 5, 6, 2, 3, 4);
$valor = 0;
for($i = 0; $i < count($dados1); $i++) {
    for($cont = 0; $cont < count($dados2); $cont++) {
        $valor += $dados1[$i] + $dados2[$cont];
    }
    echo $valor . "<br>";
    echo "<hr>";
}

