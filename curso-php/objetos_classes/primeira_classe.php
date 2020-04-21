<div class="titulo">Primeira Classe</div>

<?php

class Cliente {
    public $nome = "Anonimo";
    public $idade = "20";

    public function apresentar() {
        echo "Nome: {$this->nome} <br>";
        echo "Idade: {$this->idade} <br><br>";
    }
}

$c1 = new Cliente();
$c1 -> nome = "Diovane";
$c1 -> apresentar();

$c2 = new Cliente();
$c2 -> nome = "Michele";
$c2 -> idade = 22;
$c2 -> apresentar();