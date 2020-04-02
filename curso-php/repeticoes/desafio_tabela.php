<div class="titulo">Desafio tabela</div>

<?php
$matriz = [
    ["01", "02", "03", "04", "05"],
    ["06", "07", "08", "09", "10"],
    ["11", "12", "13", "14", "15"],
    ["16", "17", "18", "19", "20"]
];
?>

<div>
    <table>
        <?php
            foreach($matriz as $linha){
                echo "<tr>";
                    foreach($linha as $valor) {
                        echo "<td>".$valor."</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
</div>

<hr>

<div>
    <table>
        <?php
            foreach($matriz as $chave => $valor) {
                $cor = $chave % 2 == 0 ? 'background-color: red;' : '';
                echo "<tr style='{$cor}'>";
                    foreach($linha as $valor) {
                        echo "<td>".$valor."</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
</div>
