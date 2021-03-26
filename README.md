# Sobre o projeto
CRUD simples feito em Laravel (v8) utilizando o layout White Dashboard

O usuário pode
* registrar e fazer log-in
* editar detalhes do seu perfil
* publicar notícias

As notícias não são compartilhadas entre os usuários, apenas quem postou consegue ver

## Execução
Após baixar o arquivo, renomear o .env.example para .env e configurar os campos de database. 
Após isso, abra o local da pasta no terminal e rode `composer install` para instalar as dependências, depois, rode `php artisan key:generate`, `php artisan migrate` e por fim `php artisan serve` para iniciar o servidor.****
