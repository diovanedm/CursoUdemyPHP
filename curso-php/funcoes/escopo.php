<div class="titulo">Função & Escopo</div>

<?php
function imprimirMensagens() {
    echo "Olá!";
    echo "Até a próxima <br>"; 
}

imprimirMensagens();

echo "<br>";

$variavel = 1;

function trocaValor() {
    $variavel = 2;
    echo $variavel;
}

echo $variavel . "<br>";
trocaValor();
echo "<br>" . $variavel . "<br>";

function trocaValorDeVerdade() {
    global $variavel; //Novidade para mim
    $variavel = 100;
    echo $variavel;
}

trocaValorDeVerdade();
echo "<br>";
echo $variavel;

var_dump(trocaValorDeVerdade());

