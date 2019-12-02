<html>
    <head>
        <title>MarbeUrban</title>
        <meta charset="utf-8">
        <link rel="icon" href="./publico/imagens/cabide.png" type="image/x-icon"/>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
    <body>
        <div id="topo">
            <div id="inicio">
                <div id="imagemlogo">
                    <a href="#"> <img src="./publico/imagens/logo.png" width="230px"> </a>
                </div>
                <div id="icons">
                    <form method="POST" action="produto/buscar" id="pesquisa">
                        <input id="pesq" type="text" name="busca" placeholder="PESQUISAR :)">
                        <button id="lupa" type="submit"><img src="publico/imagens/lupa.jpg" width="50px" title="Pesquisar"> </button>
                    </form>
                    <a href="./login/index/"> <img src="publico/imagens/rostinho.png" width="50px" title="Login" id="rosto"> </a>
                    <a href="./carrinho/index"> <img src="publico/imagens/carrinho2.png" width="43px" title="Meu carrinho" id="carrinho"> </a>			
                </div>
            </div>
        </div>

        <br> <br> <br> <br>
        <div id="menu">
            <ul>
			
		
                <div id="menus">
            
                <li> <a href="./paginas/" title="Home"> Inicio </a> </li>	 
		<li> <a href="./cliente/adicionar/" class="btn btn-primary" title="Cadastre-se"> Cadastre-se </a> </li> 
		<li> <a href="./carrinho/" title="Produtos"> Produtos </a> </li>	
		<li> <a href="./adm/" title="Administrador"> Administrador </a></li>
                <li> <a href="cliente/ver/<?=acessoPegarUsuarioLogado();?>" title="Minha Conta"> Minha Conta </a> </li>
                
                </div>
            </ul>
        </div>	
      <div id="menu2">
            <ul>
		<?php if (acessoPegarPapelDoUsuario() == 'admin') {?>
               <div id="menus2">
            
		<li>  <a href="./cliente/listar"> Listar usuários </a> </li> 
                <li>  <a href="./produto/listar"> Listar produtos </a> </li>
                <li>  <a href="./categoria/listar"> Listar categorias </a>  </li>
                <li>  <a href="./cupom/listar"> Listar cupons </a>  </li>
                <li>  <a href="./endereco/listar"> Listar endereços </a>  </li>
                <li>  <a href="./FormaPagamento/listar"> Listar Formas de Pagamento </a> </li>
                <li> <a href="./pedido/listar"> Listar Pedidos </a>  </li>
                
                </div>
                <?php } ?>
            </ul>
        </div> <br><br><br>
        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>
        
        
	<div id="rodape">
		<div id="lista">
                    <h3> AJUDA E SUPORTE </h3>
                    <h4> Como Pedir </h4>
                    <h4> Como rastrear </h4> 
                    <h4> Devoluçao ou Troca </h4>
                    <h4> Informaçoes de Envio </h4>
		</div>
						
		<div id="lista">
                    <h3> INFORMAÇOES DA EMPRESA </h3>
                    <h4> Sobre MarbeUrban </h4>
                    <h4> Investidores </h4>
                    <h4> Trabelhe Conosco </h4>
                    <h4> Nossas Lojas </h4>
		</div>
						
		<div id="lista">
                    <h3> ATENDIMENTO AO CLIENTE </h3>
                    <h4> Método de Pagamento </h4>
                    <h4> Contate-nos </h4>
                    <h4> Termos de Uso </h4>
                    <h4> Cartão MarbeUrban </h4>
		</div>
						
		<div id="lista1">
                    <h4 id="lista">FORMAS DE PAGAMENTO:</h4>
                    <img src="publico/imagens/cartoes.png" width="60%" height="45%">
		</div>
	</div>
        
    </body>
</html>
