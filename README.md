repositório do projeto: https://github.com/Nickrosendo/quiz-game-api

Informações para rodar a api do projeto quiz:

1-Instalar PHP;
2-Instalar composer(gerenciador de pacotes do php): https://getcomposer.org/download/
3-Instalar Laravel: https://laravel.com/docs/5.8#installation
4-Criar um arquivo .env contendo as variaveis de ambiente que o projeto necessita para rodar(seguir como exemplo o arquivo .env.example
5-Criar um usuario para acesso ao banco de dados(não é um usuario da aplicação): php artisan passport:client --personal
6-Possuir um mysql instalado na máquina e referenciar o seu acesso no arquivo .env
7-Rodar miggrations(script que cria as tabelas do banco de dados): php artisan migrate
8-Rodar seed(script que cria usuarios fakes para o banco de dados): php artisan db:seed
9-Subir o servidor http: php artisan serve
