<div class="titulo">Recursividade</div>

<?php

function somaUmAte($numero) {
    $soma = 0;
    for($cont = 0; $cont <= $numero; $cont++) {
        $soma = $soma + $cont;
    }
    echo $soma;
}

somaUmAte(10);

function somaRecursivaAte($numero) {
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaAte($numero - 1);
}