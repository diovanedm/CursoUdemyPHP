<div class="titulo">Argumento Padão</div>

<?php
function pessoa($nome, $pronome = "Senhor(a)") {
    echo "Bom dia, $pronome $nome";
    echo "<br>";
}
pessoa("Diovane");
pessoa(null, "Marcia");