<div class="titulo">Desafio Recursividade</div>     

<?php

function recursividade($array, $nivel = ">") {
    foreach($array as $elemento) {
        if(is_array($elemento)) {
            recursividade($elemento, $nivel . $nivel[0]);
        }
        else {
            echo "$nivel $elemento <br>";
        }
    }
}

$array = [5,3,1, [2, 0], 7, 5,  [0,[8, 6]], 9];

recursividade($array);

