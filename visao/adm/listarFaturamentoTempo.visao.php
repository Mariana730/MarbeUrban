<h2>Lista de pedidos (<?php echo $data1 . " até " . $data2 ?>):</h2>	
<div>

    <div>
        <div>
            <h3>Pedido</h3>
        </div>        
        <div>
            <h3>Data</h3>
        </div>
        <div>
            <h3>Valor por pedido</h3>
        </div>
    </div>
    <hr size="" width="100%">
    <?php
    $totalFaturamento = 0;
    foreach ($pedidos as $pedido):
        ?>
        <div>
            <div>
                <div>
                    <p><?= $pedido['idpedido'] ?></p>
                </div>
            </div>
            <div>
                <p><?= $pedido['datacompra'] ?></p>
            </div>
            <div>
                <p><?= $pedido['valorPedido'] ?></p>
            </div>
        </div>
        <hr size="" width="100%">
        <?php
        $totalFaturamento += $pedido['valorPedido'];
    endforeach;
    ?>
        <h3 id="totalFaturamento">Total faturado: R$<?= $totalFaturamento ?></h3>
</div><br>

<a href="./cliente/adm"><button class="botao">Voltar</button></a>

