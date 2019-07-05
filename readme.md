[![CircleCI](https://circleci.com/gh/MedAdrian/Sales/tree/master.svg?style=svg)](https://circleci.com/gh/MedAdrian/Sales/tree/master)

# Sales CRUD with phpUnit and Lumen

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

# Setting up the project
1. Download this repo
    - git clone https://github.com/MedAdrian/Sales.git
    - cd Sales
   
2. Install [PHP >=7.1.3](http://php.net/downloads.php]), and verify your version with
    - php -V
   
3. Install [composer](https://getcomposer.org/download/), once installed run this command to dowload all dependencies for the project
    - composer install

4. Install [mysql](https://www.mysql.com/downloads/), once installed verify that the service is started.

5. Run the laravel migrations and seeds with the commands:
    - php artisan migrate
    - php artisan db:seed --class=ItemsTableSeeder
    - php artisan db:seed --class=SalesTableSeeder
    - php artisan db:seed --class=SalesItemsTableSeeder
    
# How to test
Run the command listed below on the console:
./vendor/bin/phpunit
