<div class="titulo">Break/Continue</div>

<?php

for($cont = 0;;) {
    $cont++;
    if($cont > 20) break; 
    else echo $cont . "<br>"; 
}

echo "<br>";
echo "<hr>";
// break e continue dentro do for 
$array = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,
                17,18,19,20,21,22,23,24,25,26,27,28,29,30);

for(;;) {
    $sorteado = array_rand($array);
    if($array[$sorteado] == 3 || $array[$sorteado] == 7 ) {
        echo "Sai do loop com o valor $array[$sorteado]" . "<br>";
        break;
    } else {
        echo $array[$sorteado] . "<br>";
        continue;
    }
}


echo "<br>";
echo "<hr>";


// Professor não recomenda usar o break/continue dentro de um projeto real por conta da leitura