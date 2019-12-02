<html> 
    <head>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
    <body>	
        <div id="opadm">
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/listaradm"> <button class="botadm" type="submit" <strong>ESTOQUE</strong></button></a> <?php } ?></td> <br><br>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/pegarcategoria"> <button class="botadm" type="submit" <strong>CATEGORIAS</strong></button></a> <?php } ?></td> <br><br>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/listarPedidosTempo"> <button class="botadm" type="submit" <strong>DATAS DE COMPRAS</strong></button></a> <?php } ?></td> <br><br>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/listarPedidosLocal"> <button class="botadm" type="submit" <strong>COMPRADOS POR CIDADE</strong></button></a> <?php } ?></td> <br><br>
        </div>  
    </body>
</html>