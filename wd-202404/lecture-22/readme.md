# Project Architect

## Topics
* Dynamic `APP_PORT`
* Handle Error Logging & Refactor `kernel` and `LoadEnvironment` class
* Implement `Routing`
* Add `base_path()` & `handleException()`
* Implement `view()` method to call all views
* Data pass to the views

## Installation Guide

* Download or Clone the project from git
* Copy & Paste the project to the root directory of `webserver`. Like if you are using `xampp` then its `htdocs`
* Goto the project directory. Assume the directory name is `lecture-22`
* Open terminal from `lecture-20`
* Run the composer install or update command like `composer install` or `composer update`
* Run `copy .env.example .env` to create new `.env` file
* Update `.env` with the values
* Run `php console serve` to run the project on `8000` or defined port
* Run `php console down` to make undermaintanance mode
* Run `php console up` to move live



## Class Recording
You can find the class recording by following the URL
[Youtube Link](https://youtu.be/vjC4lk2t9Ok)
