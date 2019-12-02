CREATE DATABASE marbeurban;
USE MarbeUrban;

CREATE TABLE FormaPagamento (
idFormaPagamento INT NOT NULL AUTO_INCREMENT,
descricao VARCHAR(45) NOT NULL,
PRIMARY KEY (idFormaPagamento)
);

CREATE TABLE categoria (
id_categoria INT(11) NOT NULL AUTO_INCREMENT,
nomecategoria VARCHAR (60) NOT NULL,
descricaocategoria VARCHAR(100) NOT NULL,
PRIMARY KEY(id_categoria)
);

CREATE TABLE produtos(
idproduto INT(11) NOT NULL AUTO_INCREMENT,
id_categoria INT(11) NOT NULL, 
nomeproduto VARCHAR(30) NOT NULL,
preco DOUBLE NOT NULL,
descricao VARCHAR(60) NOT NULL,
tamanho VARCHAR(60) NOT NULL,
imagem VARCHAR(60)NOT NULL,
quantidade VARCHAR(11) NOT NULL,
estoque_minimo INT(11) NOT NULL,
estoque_maximmo INT(11)NOT NULL,
PRIMARY KEY(idproduto),
FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria) ON DELETE CASCADE 
ON UPDATE CASCADE
);

CREATE TABLE usuario(
idusuario INT(11) NOT NULL AUTO_INCREMENT,
nomeusuario VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
cpf BIGINT NOT NULL,
datadenascimento VARCHAR(10) NOT NULL,
sexo VARCHAR(60) NOT NULL,
tipousuario VARCHAR(5),
PRIMARY KEY(idusuario)
);

CREATE TABLE endereco (
idendereco INT(11) NOT NULL AUTO_INCREMENT,
idusuario INT(11) NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero VARCHAR(7) NOT NULL,
complemento VARCHAR(60),
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
cep VARCHAR(40) NOT NULL,
PRIMARY KEY (idendereco),
FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE 
ON UPDATE CASCADE
);

CREATE TABLE cupom (
idcupom INT(11) NOT NULL AUTO_INCREMENT,
nomecupom VARCHAR(60) NOT NULL,
desconto VARCHAR(40) NOT NULL,
PRIMARY KEY (idcupom)
);

CREATE TABLE log_produto (
id_log INT(11) NOT NULL AUTO_INCREMENT,
tabela VARCHAR(45) NOT NULL,
usuario VARCHAR(45) NOT NULL,
data_hora DATETIME NOT NULL,
acao VARCHAR(45) NOT NULL,
dados VARCHAR(1000) NOT NULL,
PRIMARY KEY (id_log)
);

CREATE TABLE pedido (
	idpedido INT(11) NOT NULL AUTO_INCREMENT,
	idendereco INT(11) NOT NULL,
	idusuario INT(11) NOT NULL,
	valorcupom VARCHAR(60),
	dataCompra DATE NOT NULL,
	idFormaPagamento INT NOT NULL,
	PRIMARY KEY (idpedido),
	FOREIGN KEY (idusuario) REFERENCES usuario(idusuario) ON DELETE NO ACTION ON UPDATE NO ACTION,
	FOREIGN KEY (idendereco) REFERENCES endereco(idendereco) ON DELETE NO ACTION ON UPDATE NO ACTION,
	FOREIGN KEY (idFormaPagamento) REFERENCES FormaPagamento(idFormaPagamento) ON DELETE NO ACTION ON UPDATE NO ACTION
);

CREATE TABLE pedido_produto (
	idproduto INT(11) NOT NULL,
	idpedido INT(11) NOT NULL,
	quantidade INTEGER NOT NULL,
	PRIMARY KEY (idproduto, idpedido),
	FOREIGN KEY (idpedido) REFERENCES pedido (idpedido) ON DELETE NO ACTION ON UPDATE NO ACTION,
	FOREIGN KEY (idproduto) REFERENCES produtos (idproduto) ON DELETE NO ACTION ON UPDATE NO ACTION
);

INSERT INTO usuario (nomeusuario, email, senha, cpf, datadenascimento, sexo, tipousuario) 
VALUES ('Beatriz Pelais','msndabia@hotmail.com','12345','45729432810','18/01/2003','F','admin');

INSERT INTO categoria (nomecategoria, descricaocategoria) 
VALUES ('Tecido', 'Algodao');

INSERT INTO produtos (id_categoria, nomeproduto, preco, descricao, tamanho, imagem, quantidade, estoque_minimo, estoque_maximmo)
VALUES ('1','Moletom Sport',200,'Adequado para dias frios','M, G','publico/imagens/modelo1.PNG','20','20', '10');

INSERT INTO produtos (id_categoria, nomeproduto, preco, descricao, tamanho, imagem, quantidade, estoque_minimo, estoque_maximmo)
VALUES ('1','Moletom Caribe',340,'Adequado para o Caribe','P, M','publico/imagens/modelo7.PNG','10','10', '5');

INSERT INTO produtos (id_categoria, nomeproduto, preco, descricao, tamanho, imagem, quantidade, estoque_minimo, estoque_maximmo)
VALUES ('1','Moletom Alvo - X',230,'Nova Era Style','P, M, G','publico/imagens/modelo11.PNG','30','30', '5');