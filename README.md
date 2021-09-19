Laravel Sail App After Cloning From Github
------------------------------------------
Follow these steps for a Laravel repository with Sail after cloning from Github

1. Clone your repository, example:
$ git clone https://github.com/karnan131k/runner-app.git

2. Change directory into the newly created app/project.
$ cd laravel-backend-api

3. Install all required dependencies
$ docker run --rm -v $(pwd):/opt -w /opt laravelsail/php80-composer:latest composer install

    NOTE: This may take a while if this is the first time installing this as a container.

4. Set the proper permissions to the project files.
$ sudo chown -R $USER: .

5. Run the servers with Sail
$ vendor/bin/sail up -d

6. Create a database to be used by this project 

    Open phpmyadmin using  this url http://localhost:8081 and login mysql database
        username: root
        password: default empty password otherwise use "password' as password
    create database for your application 

7. Start the container terminal
$ vendor/bin/sail bash

8. Copy .env File
$ cp .env.example .env

9. Open .env to match the following line:
FROM: DB_HOST=127.0.0.1
TO: DB_HOST=mysql

10. Generate APP_KEY Key.
$ php artisan key:generate

11. Build the seed.
$ php artisan migrate:fresh --seed

12. You can now open your application with your browser: http://localhost and you can check apis in postman
     http://localhost/api/v1/runner/1/form-data
     http://localhost/api/user