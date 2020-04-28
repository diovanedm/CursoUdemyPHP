<div class="titulo">Operadores Relacionais</div>

<?php
echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);


echo '<p class="divisao">Valores pode ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");