<?php

namespace Kakatoji\Belajar\MVC\Controller;

use Kakatoji\Belajar\MVC\App\View;

class HomeController{
  
  public function index():void
  {
    $model =[
      "title" => "web pertama ku",
      "path"  => "index",
      "judul" => "belajar view MVC"
      ];
      View::render("Home/index",$model);
  }
  
  public function about():void
  {
    $model =[
      "title" => "Halaman profile",
      "path"  => "about",
      "judul" => "mengenal saya"
      ];
      View::render("About/index",$model);
  }
  
  public function blog():void
  {
    $model = [
      "title" => "My BLOG FIRST",
      "path"  => "blog",
      "judul" => "ini halaman blog pertama saya"
      ];
      View::render("Blog/index",$model);
  }
  public function login():void
  {
    echo "Halaman login";
  }
}