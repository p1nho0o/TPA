create database cotemig_fit_3d1;
 use cotemig_fit_3d1;
DROP TABLE IF EXISTS alunos;
CREATE TABLE IF NOT EXISTS alunos (
idAluno int NOT NULL AUTO_INCREMENT,
nome varchar(60) NOT NULL,
email varchar(60) NOT NULL,
sexo char (1) NOT NULL,
endereco varchar (35) NOT NULL,
numero int NOT NULL,
complemento text NOT NULL,
bairro varchar(25) NOT NULL,
cidade varchar(35) NOT Null,
uf char(2) NOT NULL,
modaliade varchar(35) NOT NULL,
primary key (idAluno )
)ENGINE=myISAM default charset= utf8mb4
 collate=utf8mb4_0900_ai_ci;
