# Istructions:
## Sail On Linux
<p><b>Step 1. Instalation</b></p>
Use commands in terminal:

docker context use default

Next:

curl -s https://laravel.build/example-app | bash

After:

cd example-app

 And:

./vendor/bin/sail up

Now you can open you can access the application in your web browser at: http://localhost.

For more information or if you want to use Sail on Windows or Mac use:
- [documentation](https://laravel.com/docs/10.x/installation#laravel-and-docker).

## Configuring A Shell Alias
Use command in terminal:

alias sail='[ -f sail ] && sh sail || sh ./vendor/bin/sail'

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

## Run serve 

Use command in terminal:

sail npm run dev

And now you can follow link http://localhost  and there try functionality 


