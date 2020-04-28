<div class="titulo">Desafio Palindromo</div>

<div>
    <form action="#" method="post">
        <label for="palavra">Digite a palavra:</label>
        <input type="text" name="palavra" id="palavra">

        <button type="submit">Enviar</button>
    </form>
</div>

<style>
    form > label {
        font-size: 30px;
    }

    input, button {
        font-size: 1.5rem;
    }
</style>

<?php
// Minha solução
function ePalindromo($palavra) {
    $palavra = str_split($palavra);
    $palindromo = "";
    
    for($i = count($palavra) - 1; $i >= 0; $i--) {  
        $palindromo .= $palavra[$i];
    }
    
    $palindromo = str_split($palindromo);

    if($palavra === $palindromo){
        return "sim";
    } else {
        return "nao";
    }
} 

// Sulução dada pelo professor
function palindromoSimples($palavra) { 
    return $palavra === strrev($palavra) ? "Sim" : "Não";
}


$palavra = $_POST['palavra'];
$resposta = palindromoSimples(strtolower($palavra));
echo $resposta;