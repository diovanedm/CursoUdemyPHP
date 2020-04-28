<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="number" name="parametro">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="km-metro">Km > Metro</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
    </select>
    <button type="submit">Calcular</button>
</form>
<style> form > * {font-size: 1.8rem;} </style>

<?php
$parametro = $_POST['parametro'];
$conversao = $_POST['conversao'];
switch ($conversao) {
    case 'km-milha':
        $parametro =  $parametro * 0.62;
        echo $parametro . "mi";
        break;  
    case 'km-metro':
        $parametro =  $parametro * 1000;
        echo number_format($parametro, 2, '.', '') . "mm";
        break;  
    case 'milha-km':
        $parametro =  $parametro * 1.61;
        echo number_format($parametro, 2, '.', '') . "km";
        break;  
    default:         
        $parametro =  $parametro / 1000;
        echo $parametro . "km";
        break;  
}

