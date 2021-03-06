
[![Build Status](https://travis-ci.org/fsdevelopers/ani-motors.svg?branch=master)](https://travis-ci.org/fsdevelopers/ani-motors)


# Ani Motors

* [Introduction](#introduction)
* [Environment Configuration](#environment-configuration)
* [Install](#install)
* [Make .env configuration](#make-.env-configuration)
* [Generate Application Key](#generate-application-key)
* [Update Database details](#update-database-details)
* [Run Database Migration](#run-database-migration)
* [Run the Refresh command](#run-the-refresh-command)
* [Run autoload](#run-autoload-class-loader)
* [Testing Data Run Seeder](#testing-data-run-seeder)
* [Run Application](#run-application)
* [Issue during setup](https://github.com/fsdevelopers/ani-motors/blob/master/issue_tracker.md)


## Introduction
This is the Ani Motors module of education system. We are want to improve the quality of Education.

## Environment Configuration
It is often helpful to have different configuration values based on the environment where the application is running. For example, you may wish to use a different cache driver locally than you do on your production server.

## Easier Way, Configure in one command!!!

Just run the following command after cloning the repo.

    bash -x iamlazy.sh
    
Make sure on windows Run this from [git bash](https://git-for-windows.github.io/git)

Note: You must have already installed [bash](#) or [Gitbash](#) in you OS.

## Step by step

### Install
The `install` command reads the `composer.json` file from the current directory, resolves the dependencies, and installs them into `vendor`.

    composer install

### Make .env configuration
You can always generate .env file manually by running:
##### on mac or Linux  
    cp .env.example .env
##### on windows
    
    copy .env.example .env
    
### Generate Application Key
You can always generate application key by running

    php artisan key:generate
    
### Update Database details
You can insert you local database information by editing `.env` file.

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=DATABASE NAME
    DB_USERNAME=DATABASE USER NAME
    DB_PASSWORD=DATABASE PASSWORD
    
### Run Database Migration
You always run the database migration command when ever you newly install the application by using:

    php artisan migrate:install
    
Prompt will display you `Migration successfully`.

### Run the Refresh command
You will run the `refresh` command for generating migrated tables by using:

    php artisan migrate:refresh
    
Not mandatory we have set `db:seed` run with `migrate:refresh`.
Now your application is ready to launch :)

## Run Autoload Class Loader
You must run the autoload if found error `class not found`.
    
    composer dump-autoload

## Testing Data Run Seeder
You can insert dummy data in database using this command:

    php artisan db:seed

### Run Application
To run application, use the `serve` command:
    
    php artisan serve

    
## God Luck Team :-)