# Laravel + Vue >> SPA Boilerplate

## Steps to run Backend
Remember to search for "TODO" on the files to change example code.

Rename the .env.example file to .env, and fill it with your local info, then

Install PHP and JavaScript dependencies

    composer install
    npm install

Generate Laravel keys:

    php artisan key:generate

Migrate and seed the database

    php artisan migrate --seed

Compile all the front-end stuff

    npm run prod

## Steps to run Frontend

    cd frontend
    npm install

For Development
    
    npm run dev

For compilation assets

    npm run build

## License

This project is open-sourced software licensed under the [MIT license].
