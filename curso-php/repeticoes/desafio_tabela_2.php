<div class="titulo">Desafio tabela 2</div>

<div>
    <form action="#" method="post">
        <label for="n-linha">n° de linhas</label>
        <input type="number"  name="n-linha" id="n-linha" >

        <br>

        <label for="n-coluna">n° de colunas</label>
        <input type="number"  name="n-coluna" id="n-coluna">

        <br>

        <button type="submit">Gerar</button>
    </form>
 
</div>

<style>
    form > * {
        font-size: 25px;
    }

    td{
        border: 1px solid black;
        width: 60px;
        text-align: center;
    }
</style>
<?php
$linhas = intval($_POST['n-linha']);
$colunas = intval($_POST['n-coluna']);
$meioLinha = ($linhas + 1) / 2;
$meioColuna = ($colunas + 1) / 2; 

if($linhas > 0 && $colunas > 0) {
    $array = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100);
    echo "<table>";
    for($cont = 1; $cont <= $linhas; $cont++) {
        echo "<tr>";
            for($i = 1; $i <= $colunas; $i++){
                if($cont == $meioLinha) {
                    if($i == $meioColuna) {
                        echo "<td> </td>";
                    }
                    else {
                        $valor = array_rand($array);
                        echo "<td>$valor</td>";
                        unset($array[$valor]);
                    }
                }
                else {
                    $valor = array_rand($array);
                    echo "<td>$valor</td>";
                    unset($array[$valor]);
                }
            }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Precisa de no mínimo uma linha e uma coluna";
}
