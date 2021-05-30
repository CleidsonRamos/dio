Criar controller
php artisan make:controller nomedocontroller

para configurar as rotas vá na pasta ./routes/web.php

para tesetar a aplicação digite 
php artisan serve
vai estar no endereço http://127.0.0.1:8000/

api é uma forma de interagir sistemas distintos

middleware geralmente usa

endereço do api sempre tem que ter a versão, para configurar esta dentro de routes api.php
http://127.0.0.1:8000/api/v1/lista
automaticamente converte o array para json

O Model faz a parte de comunicação com o BD
No model é feito o insert, delelte, update...
php artisan make:model nome do model
vai gerar o arquivo dentro da pasta app/Models
Eloquente é um ORM faz um mapeamento dos dados para as classes


1. Um sistema feito em Java pode utilizar uma API Rest feita em PHP?
Sim, uma API Rest facilita a comunicação independente da tecnologia do cliente e servidor.

1. O que este comando faz ‘php artisan’?
Lista todos os comandos disponíveis no nosso projeto.

1. Com quais bancos de dados o Laravel consegue se conectar?
SQLite, MySQL, SQL Server e PostgreSQL.

1. Qual é a utilidade do artisan?
Contém todos os comandos de terminal do Laravel, ele facilita muito a criação de recursos como Controllers, de forma rápida e simples.

1. O que é o Eloquent?
É um ORM (Object-relational mapping) Mapeamento objeto-relacional, a função deste vendo é abstrair a comunicação com o banco de dados através de classes, métodos e atributos PHP.

1. Qual é a utilidade do Carbon?
SQLite, MySQL, SQL Server e PostgreSQL.

1. Como criar uma rota GET para o endereço '/perfil' apontando para o controller Pessoa e para a função perfil?
Route::get('/perfil', "Pessoa@perfil")

1. Qual é o comando padrão do artisan para criar um novo controller?
php artisan make:controller

1. Uma API Rest retorna apenas dados em JSON?
Não, você pode retornar qualquer valor, porém atualmente o mais indicado para trabalhar com dados estruturados é o formato JSON, por sua simplicidade de implementação.

1. Ao criar uma rota, como podemos definir um prefixo chamado ‘v2’ e agrupar as demais rotas a partir deste prefixo?
Route::prefix(‘v2’)->group(function () { /* Rotas aqui */ })