-- Cria o banco de dados
CREATE DATABASE blogdocrud;
-- Ativa o banco pra ser usado
USE blogdocrud;
-- mostra todas as tabelas do banco
SHOW TABLES;
-- Mostra o conteúdo da tabela
DESCRIBE postagem;
DESCRIBE comentario;

-- Cria uma tabela
CREATE TABLE postagem (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    postagem VARCHAR(50) NOT NULL,
    conteudo TEXT
);
CREATE TABLE comentario (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(200),
    mensagem TEXT
);

-- Modifica uma tabela
ALTER TABLE comentario 
ADD id_postagem INT(11)




