<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>


<form action="" method="POST">
    <label for="data1">Primeira data:</label>
    <input type="date" class="caixaEntraInfo" name="data1"><br><br>
    <label for="data2">Segunda data:</label>
    <input type="date" class="caixaEntraInfo" name="data2"><br><br>
    <button class="botc">Enviar</button>
</form>
<a href="cliente/adm"><button class="botc">Voltar</button></a><br><br>

