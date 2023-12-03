# Istructions:
## Sail On Linux
<p><b>Step 1. Instalation</b></p>
Open empty folder for new project->

Use command in terminal: 

git clone git@github.com:AKV85/Sail-Transport.git

After you need go to into the dir app-example, use commands in terminal:  

cd Sail-Transport/app-example

after in terminal:

docker-compose up -d

Next go to your container(example-app-laravel.test-1) in Docker Desktop, ant type inside container:

composer require laravel/sail --dev

After:

php artisan sail:install

Now you use sail in your terminal:

./vendor/bin/sail up -d

Now you can  access the application in your web browser at: http://localhost.

For more information or if you want to use Sail on Windows or Mac use:
- [documentation](https://laravel.com/docs/10.x/installation#laravel-and-docker).

## Configuring A Shell Alias
Use command in terminal:

alias sail='[ -f sail ] && sh sail || sh ./vendor/bin/sail'    (or vendor/bin/sail)

More information in [documentation](https://laravel.com/docs/10.x/sail)
## Starting & Stopping Sail
Now you can use simple commands to start or stop Sail:

sail up -d

sail down

More information in [documentation](https://laravel.com/docs/10.x/sail)

## Vue install
Use command in terminal:

sail npm i vue@next

More information in [documentation](https://v3.ru.vuejs.org/guide/installation.html)

## Vitejs plugin install 

Use command in terminal:

sail npm i @vitejs/plugin-vue

More information in [documentation](https://www.npmjs.com/package/@vitejs/plugin-vue)

## Run migrations and seeders

Use command in terminal:

sail artisan migrate

sail artisan db:seed

P.S. If you will have here some errors ,than try:

 sail artisan migrate:fresh

 and again:

 sail artisan db:seed

## Run serve 

Use command in terminal:

sail npm run dev

And now you can follow link http://localhost  and there try functionality 


