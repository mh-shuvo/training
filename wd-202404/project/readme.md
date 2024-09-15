# Project Environment Setup

## Topics
* Install `symfony/console` package
* Run whole application by `serve` command
* Implement maintenance mode
* Implement Routing using `RouteServiceProvider`
* Refactor `KernelClass`
* Refactor `LoadEnvironmentClass`
* Add new function in `helper` file


## Installation Guide

* Download or Clone the project from git
* Copy & Paste the project to the root directory of `webserver`. Like if you are using `xampp` then its `htdocs`
* Goto the project directory. Assume the directory name is `lecture-20`
* Open terminal from `lecture-20`
* Run the composer install or update command like `composer install` or `composer update`
* Run `copy .env.example .env` to create new `.env` file
* Update `.env` with the values
* Run `php console serve` to run the project on `8000` port
* Run `php console down` to make undermaintanance mode
* Run `php console up` to move live



## Class Recording
You can find the class recording by following the URL
[Youtube Link](https://youtu.be/EFNRTbtOLZo)
