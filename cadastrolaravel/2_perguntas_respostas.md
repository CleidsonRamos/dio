1. O que é o Eloquent?
É um ORM (Object-relational mapping) Mapeamento objeto-relacional, a função deste vendo é abstrair a comunicação com o banco de dados através de classes, métodos e atributos PHP.

1. Qual é a utilidade do Carbon?
Contém todos os comandos de terminal do Laravel, ele facilita muito a criação de recursos como Controllers, de forma rápida e simples.

1. Uma API Rest retorna apenas dados em JSON?
Não, você pode retornar qualquer valor, porém atualmente o mais indicado para trabalhar com dados estruturados é o formato JSON, por sua simplicidade de implementação.

1. Com quais bancos de dados o Laravel consegue se conectar?
SQLite, MySQL, SQL Server e PostgreSQL.

1. Qual é o comando padrão do artisan para criar um novo controller?
php artisan make:controller

1. O que este comando faz ‘php artisan’?
Lista todos os comandos disponíveis no nosso projeto.

1. Ao criar uma rota, como podemos definir um prefixo chamado ‘v2’ e agrupar as demais rotas a partir deste prefixo?
Route::prefix(‘v2’)->group(function () { /* Rotas aqui */ })

1. Como criar uma rota GET para o endereço '/perfil' apontando para o controller Pessoa e para a função perfil?
Route::get('/perfil', "Pessoa@perfil")

1. Um sistema feito em Java pode utilizar uma API Rest feita em PHP?
Sim, uma API Rest facilita a comunicação independente da tecnologia do cliente e servidor.