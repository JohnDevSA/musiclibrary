## About MusicLibrary

This application is designed to be used to CRUD to and from the application datebase,I have designed the application using laravel 5.8
to implement the authentication. The application has two user roles to the Administrator and normal user. Administrator is responsible to 
CRUD albums in the system. The user can only view post and also add their review... .This application is using Laravel advanced features/tools
such as below

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system

## Requirements 
-Laravel 5.8.
-Composer
-Artisan

## Installation
Download package and write some commands to be sure that everything will works fine
- https://github.com/JohnDevSA/musiclibrary.git (You can use this to download the project from github)
- if you are using the  the project folder I sent, copy the musiclibrary folder to xampp htdocs or wampp www folder
- Create a database with name  vectra_musiclib 
- Create copy of .env.example with name .env (skip this if you used the source code sent)
- This is your environment file which is required by laravel project (skip this if you used the source code sent)
- Open .env file and update this file with your MySQL Connection credentilas (Dont do this if you are using project source code sent)
- After that run following commands
- $ composer update
- $ php artisan migrate (Dont do this if you are using project source code sent instead  use the sql script  on the root folder)
- $ php artisan key:generate (Dont do this if you are using project source code sent)

#Running the application
- Run following command to get you project up and running
- $ php artisan serve

## Contacts
Email : nkidijohn_nkogatse@yahoo.com   
Cell : 079 766 8411 
