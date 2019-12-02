<link rel="stylesheet" href="./publico/css/app.css">
<br> <br> <br> <br> <br> <br>
<div id="slide">
    <img class="mySlides" src="publico/imagens/slider1.jpg" style="width:100%">
    <img class="mySlides" src="publico/imagens/slider2.jpg" style="width:100%">
    <img class="mySlides" src="publico/imagens/slider3.2.png" style="width:100%">

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</div>
<div id="destaqim">
    <div id="parteim">
        <h2 id="destaque"><strong> DESTAQUES </strong> </h2>
        <div id="p1">
            <a id="paragraf1" href="/MarbeUrban/produtos.html"><p>COLEÇAO COMPLETA ></p></a>
        </div>
    </div>
    <br>     <br>        <br>
<div id="r3">
    <?php foreach ($produtos as $produto):?>
        <div>
            <a href="produto/descricao/<?=$produto['idproduto']?>" class="link-produto">
                <img id="roupa1" src="<?=$produto['imagem']?>" width="350px" height="450px">
                <div id="escritacompra">
                    <h3 class="nomemoletom"><strong><?=$produto['nomeproduto']?></strong></h3>
                    <h4 class="nomemoletom">Por:  R$<?=$produto['preco']?>,00 a vista</h4>
        </div>
            </a>
</div>
    <?php endforeach; ?>
</div>   
   
    
    

<div id="divforms">
    <div id="telefone">
        <img id="telimg" src="publico/imagens/telefone.png">
        <h2 class="hforms">TELEFONE</h2>
        <h3 class="hforms">(15)3356-7896</h3>
    </div>

    <div id="pague">
        <img class="iconsforms" src="publico/imagens/pagamento.jpg">
        <h2 class="hforms">PAGAMENTO</h2>
        <h3 class="hforms">Em até 5X</h3>
    </div>

    <div id="contato">
        <img class="iconsforms" src="publico/imagens/carta.png">
        <h2 class="hforms">CONTATE-NOS</h2>
        <h3 class="hforms">marbeurban@contatoinforme.com</h3>
    </div>
</div>


<br><br>	

