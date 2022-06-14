<?php

namespace Kakatoji\Belajar\MVC\App;

class Router 
{
  private static array $routes = [];
  
  public static function add(string $method,string $path,string $controller,string $function,array $middlewares= []):void
  {
    self::$routes[] = [
      "method"     => $method,
      "path"       => $path,
      "controller" => $controller,
      "function"   => $function,
      "middleware" => $middlewares
      ];
  }
  public static function run():void
  {
    $path = "/";
    if(isset($_SERVER["PATH_INFO"])) {
      $path = $_SERVER["PATH_INFO"];
    }
    
    $method = $_SERVER["REQUEST_METHOD"];
    
    foreach(self::$routes as $route){
      $patren = "#^".$route["path"]."$#";
      if(preg_match($patren,$path,$variabels) && $method == $route["method"]){
        
        //exec middleware 
        foreach($route["middleware"] as $middleware){
          $interface = new $middleware;
          $interface->before();
        }
        $function   = $route["function"];
        $controller = new $route["controller"];
        
        array_shift($variabels);
        call_user_func_array([$controller,$function],$variabels);
        return;
      }
    }
    
    http_response_code(404);
    require __DIR__ ."/../views/404.php";
    
  }
  
}