# WPU Larastu

[![Build Status](https://travis-ci.org/dwyl/esta.svg?branch=master)](https://github.com/handokoadjipangestu/project-learn-wpu-larastu)
[![stability-experimental](https://img.shields.io/badge/stability-experimental-orange.svg)](https://github.com/handokoadjipangestu/project-learn-wpu-larastu)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/handokoadjipangestu/project-learn-wpu-larastu/fork)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

Larastu is a student management application, created with php with the Laravel framework as an exercise.

This project was made using [Laravel 5](https://laravel.com/docs/5.x/releases) Framework and for appearance it uses a [Bootstrap 4.\*](https://getbootstrap.com/docs/4.0/getting-started/introduction/) framework.

For those who want to contribute, just fork or download as usual!

## Requirements

-   PHP >= 5.3.7
-   Of course with the internet

## Installation

Clone the repository

    git clone git@github.com:handokoadjipangestu/project-learn-wpu-larastu.git

## Usage example

![Home](http://bebaskripsi.000webhostapp.com/project-learn-wpu-larastu/home.png?)

![Data Students](http://bebaskripsi.000webhostapp.com/project-learn-wpu-larastu/data-students.png?)

![Create Student](http://bebaskripsi.000webhostapp.com/project-learn-wpu-larastu/create-student.png?)

![Show Student](http://bebaskripsi.000webhostapp.com/project-learn-wpu-larastu/show-Student.png?)

![Edit Student](http://bebaskripsi.000webhostapp.com/project-learn-wpu-larastu/edit-student.png?)

_For more examples and usage, please contact [Handoko Adji Pangestu](https://www.instagram.com/handokoadp/)._

## Development setup

Switch to the repo folder

    cd project-learn-wpu-larastu

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

## Release History

-   0.0.1
    -   Work in progress

## Meta

Handoko Adji Pangestu – [@handokoadp](https://www.instagram.com/handokoadp/) – handokoadjipangestu@gmail.com

Distributed under the MIT license. See `LICENSE` for more information.

[https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

## Contributing

1. Fork it (<https://github.com/handokoadjipangestu/project-learn-wpu-larastu/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request
