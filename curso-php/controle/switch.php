<div class="titulo">Switch</div>

<?php
$categoria = "INTERMEDIARIO";
switch(strtolower($categoria)) {
    case 'luxo': 
        $carro = 'Camaro';
        $preco = 1000000;
        break;
    case 'intermediario': 
        $carro = 'Lancer';
        $preco = 80000;
        break;
    case 'basico': 
        $carro = 'palio';
        $preco = 35000;
        break;
    case 'pobre': 
        $carro = 'UNO 2006';
        $preco = 20000;
        break;
    default: 
        $carro = 'fusca';
        $preco = 10000; 
        break;
}

echo "Categoria: {$categoria} <br>";
echo "Carro: {$carro} <br>";
echo "Preço: R$ " . number_format($preco, 2, ',', '.');