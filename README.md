## Run locally

Assuming you already have all the components needed and environment set up for running Laravel:

- Open cmd and run `git clone https://github.com/toniyansyah4/sevima-test/`
- Run `composer install`
- Run `cp .env.example .env`
- Run `php artisan key:generate`
- Run `php artisan migrate`
- Run `npm install`
- Run `php artisan storage:link`
- Run `php artisan serve`