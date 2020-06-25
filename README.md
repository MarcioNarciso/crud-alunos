# CRUD de Aluno

Foi utilizado o CodeIgniter 4 com o SGBD MySQL/MariaDB nesse projeto.

## Pré-requisitos 

Assume-se que o PHP e o SGBD já estejam instalados na máquina local.
O PHP precisa estar no *path* do sistema.

É necessário que já exista um banco de dados chamado "php_crud".
Também é necessário que exista o usuário "app_aluno" com a senha "appaluno" com
privilégios para consultas (INSERT, UPDATE, DELETE, SELECT, etc) e criação de tabelas.
Caso prefira, altere essas configurações de conexão no arquivo ".env", seção "DATABASE", 
na raiz do projeto.

## Executando a Aplicação Localmente

Após o *download* do projeto, abra um terminal/prompt e navegue até a pasta raiz
do projeto.
Execute o seguinte comando para executar as *migrations*: `php spark migrate`
Após a execução do comando anterior, execute: `php spark serve`
A aplicação deve estar em execução na URL "http://localhost:8080/".

