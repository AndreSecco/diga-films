# DigaFilms
![logo-normal](https://user-images.githubusercontent.com/96576551/196933113-a9b83c40-5af1-44d1-b9ec-6e0c4cc4cf4a.png)

Olá seja bem vindo(a) a aplicação para simular uma biblioteca de filmes e Laravel e VueJs

Abaixo existe o passo a passo de como baixar o sistema Diga_Films e fazer ele funcionar em sua máquina

Após fazer o clone deste repositório em seu computador, primeiramente vamos configurar seu backend, então crie um banco de dados MySql em seu localhost com nome de "diga_films". 
Com o banco criado e direcionado pelo arquivo ./env que foi junto com o projeto, entre na pasta backend e rode os seguintes comandos:

Rode este comando para instalar as dependencias do projeto
- composer install --no-scripts

Rodar as migrations e criar as tabelas
- php artisan migrate

Rodar os seeders para popular as tabelas
- php artisan db:seed

Para existir um link das imagens e dos vídeos
- php artisan storage:link 

Comando para processo de autenticação
- composer require tymon/jwt-auth


No Próximo passo vamos configurar o frontend, então entre na pasta frontend e rode os seguintes comandos
- npm install
- npm install js-cookie 
- npm install axios

Em seguida vamos colocar o projeto para rodar

entre na pasta frontend e execute: npm run serve

em outro terminal entre na pasta backend e execute: php artisan serve

Agora você poderá acessar seu navegador e inserir o seguinte link: http://localhost:8081/

Agora você terá acesso a plataforma completa &#128512;

Qualquer dúvida ou questão eu estou a disposição.
Abraços.

