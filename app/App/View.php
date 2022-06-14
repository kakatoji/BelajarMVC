<?php

namespace Kakatoji\Belajar\MVC\App;

class View{
  
  public static function render(string $view,array $model = []):void
  {
    require __DIR__ ."/../views/".$view.".php";
  }
}