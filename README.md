# Laravel blog with Vue Admin

Learn from [learn2code.sk](https://learn2code.sk)

Install dependencies

    composer install
    npm install && npm run dev
    
Create database tables

    php artisan migrate

Start server and open browser

    php artisan serve
    http://localhost:8000
    
## Dev options

Debug Telescope you can find

    http://localhost:8000/telescope
    
Laravel IDE Helper Generator

    php artisan cache:clear
    php artisan clear-compiled
    php artisan ide-helper:generate

### Tips
 - If get data from DB by some column, you should add index (unique) on this column. (Lesson 25)
