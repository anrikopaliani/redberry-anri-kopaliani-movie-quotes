<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Movie Quotes

Movie Quotes არის პლატფორმა სადაც შეგიძლია ნახო Random-ად ფილმის ციტატები.

## Prerequisites

-   <p><img src="https://e7.pngegg.com/pngimages/906/282/png-clipart-logo-computer-icons-php-wm-logo-text-label.png" width="35" alt="php"> PHP@7.2 and up</p>
-   <p><img src="https://e7.pngegg.com/pngimages/1018/16/png-clipart-mysql-workbench-database-mysql-cluster-others-text-logo.png" width="35" alt="mysql">MYSQL@8 and up</p>
-   <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/db/Npm-logo.svg/2560px-Npm-logo.svg.png" alt="npm">npm@6 and up</p>
-   <p><img src="https://upload.wikimedia.org/wikipedia/commons/2/26/Logo-composer-transparent.png?20150215175858" alt="composer">composer@2 and up</p>

## Tech Stack

-   <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png" width="35" alt="laravel" height="35"><a href="https://laravel.com/docs/8.x">Laravel@8.x</a> - back-end framework</p>
-   <p><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/1024px-Tailwind_CSS_Logo.svg.png" width="35" height="35" alt="tailwind"><a href="https://tailwindcss.com/docs/installation">Tailwind CSS</a> - CSS framework</p>
-   <p><img src="https://avatars.githubusercontent.com/u/7535935?s=280&v=4" width="35" height="35" alt="spatie"><a href="https://github.com/spatie/laravel-translatable">Spatie Translatable </a> - package for translation</p>

## Getting Started

1. First of all you neet to clone the github repository

```
    git clone https://github.com/RedberryInternship/anri-kopaliani-movie-quotes.git
```

2. Next step requires you to run composer install in order to install all the dependencies.

```
    composer install
```

3. after you have installed all the PHP dependencies, it's time to install all the JS dependencies:

```
    npm install
```

4.  Now we need to set our env file. Go to the root of your project and execute this command.

```
    cp .env.example .env
```

And now you should provide .env file all the necessary environment variables:

MYSQL:

```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=
```

## Development

You can run Laravel's built-in development server by executing:

```
php artisan serve
```

## Create Admin

```
    php artisan make:admin
```

## Project Structure

```

├─── app
│ ├─── Console
│ ├─── Exceptions
│ ├─── Facades
│ ├─── Http
│ ├─── Providers
│ ├─── Models
├─── bootstrap
├─── config
├─── database
├─── public
├─── resources
├─── routes
├─── storage
├─── tests

- .env
- artisan
- composer.json
- package.json
- phpunit.xml

```

## DrawSQL

![Screenshot from 2023-04-12 03-22-37](https://user-images.githubusercontent.com/73776304/231309373-5a751d42-1eca-4b68-ace9-65a6b87f1866.png)
