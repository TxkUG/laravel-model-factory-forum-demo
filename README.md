<img src="https://laravel.com/assets/img/components/logo-laravel.svg"> 

# Laravel Model Factory Demo

Laravel Model Factory demo presented to the Texarkana Area IT Users Group on May 19, 2017

----------

## Installation


Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:gothinkster/TxkUG/laravel-model-factory-forum-demo.git

Switch to the repo folder

    cd laravel-model-factory-forum-demo

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate
    
Create a new database 

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
      
Run the database seeder and you're done

    php artisan db:seed
    
## Code

Most of the related demo code is in the database\factories\ModelFactory.php and database\seeds\Databseeder.php files.

## Resources

Faker repo: https://github.com/fzaninotto/Faker
