1. Qual é a utilidade do APP_KEY no .env?
É a chave de criptografia utilizada pelo framework.

1. Qual é a utilidade do arquivo .env?
Armazena todas as variáveis de ambiente e não deve ser versionado, já que pode conter informações sensíveis como a senha do banco de dados.

1. Onde são salvos os logs de erro no Laravel?
Na pasta storage/logs.

1. Em qual pasta devem ser colocados os arquivos de acesso público?
public

1. Onde podemos alterar o tempo de sessão do usuário?
config/session.php

1. Como um projeto de código aberto pode ser seguro?
Com a participação da comunidade, várias pessoas com acesso ao código fonte contribuem para a constante evolução do projeto.

1. Como podemos criar um novo projeto PHP que usará o Laravel como Framework?
Segundo a documentação, através do instalador ou via "composer create-project".

1. Qual porta o Laravel utiliza para se conectar ao serviço local do SQLite?
O SQLite não é um serviço, não tem porta de conexão, é simplesmente um arquivo.

1. Como iniciar um novo projeto Laravel 6 via composer em uma pasta "blog"?
composer create-project laravel/laravel blog 6.

1. Um projeto Laravel consegue se conectar simultaneamente a quantos bancos SQLite?
Não tem limite, mas cada conexão deve ser definida no .env e nas configurações de banco da pasta config.