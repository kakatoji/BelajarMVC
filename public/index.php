<?php

require_once __DIR__ ."/../vendor/autoload.php";

use Kakatoji\Belajar\MVC\App\Router;
use Kakatoji\Belajar\MVC\Controller\HomeController;
use Kakatoji\Belajar\MVC\Controller\ProductController;
use Kakatoji\Belajar\MVC\Middleware\AuthMiddleware;

Router::add("GET","/",HomeController::class,"index");
Router::add("GET","/about",HomeController::class,"about",[AuthMiddleware::class]);
Router::add("GET","/blog",HomeController::class,"blog");
Router::add("GET","/productID/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)",ProductController::class,"categories");
Router::run();