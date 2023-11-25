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

alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'

More information in [documentation](https://laravel.com/docs/10.x/sail)
## Starting & Stopping Sail
Now you can use simple commands to start or stop Sail:

sail up -d

sail down

More information in [documentation](https://laravel.com/docs/10.x/sail)

