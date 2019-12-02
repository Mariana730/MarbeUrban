<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<h2>Intervalo de datas </h2> <br>

<form action="" method="POST" class="form1">
    <div class="div2">
        <label for="data1">Primeira data:</label>
        <input type="date" class="d1" name="data1"><br><br>
        <label for="data2">Segunda data:</label>
        <input type="date" class="d1" name="data2"><br><br>
    </div>
    <button class="botc">Enviar</button>
</form>

