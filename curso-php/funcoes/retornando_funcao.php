<div class="titulo">Retornando Função</div>

<?php
function mostraPreco($moeda) {
    return function($preco) use ($moeda) {
        echo "$moeda $preco,00";
    };
}

$preco = mostraPreco("R$");
$preco(15);