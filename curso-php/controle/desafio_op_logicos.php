<div class="titulo">Desafio Operadores Lógicos</div>

<style>
    select,button {
        font-size: 25px
    }
</style>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho Terça</label>
        <select name="t1" id="t1">
            <option value="1">Executada</option>
            <option value="0">Não executada</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho Quinta</label>
        <select name="t2" id="t2">
            <option value="1">Executada</option>
            <option value="0">Não executada</option>
        </select>
    </div>
    <button type="submit">Enviar</button>
</form>

<?php 
if($_POST['t1'] && $_POST['t2']) {
    echo "Vai para o Shopping, Compra TV '50' e toma sorverte";
} else if($_POST['t1'] != $_POST['t2']) {
    echo "Vai para o Shopping, Compra TV '32' e toma sorverte" ;
} else {
    echo "Fica em casa, mais saudável!";
}
