<div class="titulo">Map e Filter</div>

<?php
$pessoa = array(
    ["Nome" => "Diovane", "Idade" => 22],
    ["Nome" => "Ana", "Idade" => 17],
    ["Nome" => "Dani", "Idade" => 18],
    ["Nome" => "Soraia", "Idade" => 24],
    ["Nome" => "Anny", "Idade" => 3],
    ["Nome" => "Sergio", "Idade" => 17],
    ["Nome" => "Michele", "Idade" => 22]
);

// Array Map
$entradaBuate = array_map(function($pessoa) {
    return array_push($pessoa[0], "Lindo");
},$pessoa);

print_r($entradaBuate);





// Array Filter
// $pessoasMaiorIdade = array_filter($pessoa, function($pessoa) {
//     return $pessoa["Idade"] >= 18;
// });

// foreach($pessoasMaiorIdade as $pessoa) {
//     echo $pessoa["Nome"] . "<br>";
// }
