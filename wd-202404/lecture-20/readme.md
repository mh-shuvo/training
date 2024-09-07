# Project Environment Setup

## Topics
* Organize The Files & Folders
* Composer Setup
* Configure DotEnv to store the credential using the `vlucas/phpdotenv`
* Discuss about Service Container(Mini Version);
* BootstrapContract & Bootstraping
* Helpers files for utitlity support


## Installation Guide

* Download or Clone the project from git
* Copy & Paste the project to the root directory of `webserver`. Like if you are using `xampp` then its `htdocs`
* Goto the project directory. Assume the directory name is `lecture-20`
* Open terminal from `lecture-20`
* Run the composer install or update command like `composer install` or `composer update`
* Run `copy .env.example .env` to create new `.env` file
* Update `.env` with the values
* Run `php -S localhost:8000` to run the project on `8000` port
* If you want you can use any other port which is available in your webserver


## Class Recording
You can find the class recording by following the URL
[Youtube Link](https://youtu.be/WSihWjj4log)

## Note

Service Container
Singleton Pattern

    class A{}

    $a = new A();
    $a->projectName = "E-Shopper";

    $b = new A();

    class Product{
        public function __construct(Category $cat, Suppliar $sup){

        }
    }

    $cat = new Category();
    $sup = new Suppliar();
    $product = new Product($cat,$sup);

