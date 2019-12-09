# Demo of Laratables

Online Demo - https://laratables.freshbits.in

This repo contains the code for the Example of [One To One Laratables](https://github.com/freshbitsweb/laratables-demo-one-to-one) package.

# Installation

You can also download and run this app locally.

1) Clone the repo:
```
git clone https://github.com/freshbitsweb/laratables-demo-one-to-one.git [DIRECTORY_NAME]
```

2) Create `.env` file from the example file:
```
php -r "file_exists('.env') || copy('.env.example', '.env');"
```

3) Setup .env variables (Mainly APP_URL and DB_DATABASE)

4) Run following commands:
```
composer install
php artisan key:generate
php artisan migrate --seed
```

Done.
