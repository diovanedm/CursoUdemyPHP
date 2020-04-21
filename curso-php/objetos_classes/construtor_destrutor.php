<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa {
    public $nome;
    public $idade; 

    public function __construct($novoNome, $idade) {
        echo "Construtor invocado <br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    public function __destruct() {
        echo "E morreu <br>";
    }

    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

// Chamar o construtor
$p1 = new Pessoa("Diovane", 21);
$p2 = new Pessoa("Michele", 22);


$p1->apresentar();
$p2->apresentar();

//Chamar o destrutor
unset($p1);
// ou
$p2 = NULL;