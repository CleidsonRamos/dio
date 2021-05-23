1. Como podemos saber se os testes estão cobrindo os 90% recomendados do código?
Através dos relatórios ou ferramentas de code covered.

1. Ao executar o comando "composer install", como as bibliotecas são disponibilizadas no projeto?
São adicionadas dentro da pasta vendor e acessadas após o carregamento do arquivo de autoload.

1. Seguindo as boas práticas, qual é a melhor forma de testar nosso sistema para garantir que tudo continua funcionando ao adicionar novas funcionalidades?
Realizando testes unitários, não apenas nas funções que já existiam, mas também nas novas.

1. O PHPunit é uma biblioteca que já faz parte do PHP padrão, ou é uma biblioteca que podemos instalar via composer?
É uma biblioteca externa e pode ser instalado via composer ou simplesmente baixando o arquivo .phar

1. No PHPUnit qual é a forma recomendada de testar vários conjuntos de dados de uma única vez?
Organizar esses dados de teste em uma função separada, utilizando a notação @dataProvider para indicar a função que irá retornar esses dados.

1. No PHPUnit o que a função ‘assertEquals’ faz?
Testa se o valor retornado é igual ao valor esperado e se são do mesmo tipo.

1. Qual é o nome do arquivo de configuração do composer, utilizado para definir as dependências e um projeto?
composer.json

1. Por que realizar testes de interface gráfica (UI) é mais barato do que testes unitários?
Isso está absolutamente errado, testes unitários são muito mais baratos de serem realizados, pois não envolvem as particularidades de resolução de tela, animações, etc… Testes unitários são muito mais simples e rápidos.

1. O que este comando faz ‘composer require --dev phpunit/phpunit’?
Instala o phpunit como dependência de desenvolvimento no nosso projeto.

1. O que acontece ao utilizar o composer para instalar uma biblioteca que exige o PHP 7.3 e o ambiente estiver como PHP 5.6?
Gera um erro avisando sobre a incompatibilidade e não prossegue com a instalação.