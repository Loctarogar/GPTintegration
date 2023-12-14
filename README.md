./vendor/bin/sail up


./vendor/bin/sail artisan cache:clear

#Executing Composer Commands
./vendor/bin/sail composer require laravel/sanctum

# Running Artisan commands within Laravel Sail...
./vendor/bin/sail artisan queue:work

#Executing Node / NPM Commands
./vendor/bin/sail npm run dev
