<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nomePessoa, $idadePessoa) {
        $this->nome = $nomePessoa;
        $this->idade = $idadePessoa;
    }
}

class Usuario extends Pessoa{
    public $login;
    
    function __construct($nome, $idade, $login) {
        parent::__construct($nome, $idade);

        $this->login = $login;
    }

    public function apresentar() {
        return "{$this->nome}{$this->idade}{$this->login}";
    }
}

$usuario = new Usuario("diovane", 21, "diovandm");
echo $usuario->apresentar();