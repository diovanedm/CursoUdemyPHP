<div class="titulo">Desafio Switch 2</div>

<form action="#" method="post">
    <input type="number" name="parametro">
    <select name="conversao" id="conversao">
        <option value="C-F">ºC > ºF</option>
        <option value="F-C">ºF > ºC</option>
    </select>
    <button type="submit">Calcular</button>
</form>
<style> form > * {font-size: 1.8rem;} </style>

<?php
/*const CELSIUS_FAHRENHEIT = ($parametro * 1.8000) + 32.00;
const FAHRENHEIT_CELSIUS = ($parametro - 32) / 1.8;*/

$parametro = $_POST['parametro'];
$conversao = $_POST['conversao'];
switch ($conversao) {
    case 'C-F':
        $parametro =  ($parametro * 1.8000) + 32.00;;
        echo $parametro . "ºF";
        break;  
    case 'F-C':
        $parametro =  ($parametro - 32) / 1.8;
        echo $parametro . "ºC";
        break;  
}

