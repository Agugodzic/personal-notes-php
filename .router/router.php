<?php
namespace router;

class Router{
  private static $routes = [
    /*
      'GET' => [
        'route1' => [
          'function' => function1(){....},
          'component' => 'routeComponent1'
          'uri' => 'uri1'
        ], ...
      ]
      'POST'  => [
        'route1' => [
          'function' => function1(){....},
          'route' => 'route',
          'uri' => 'uri1'
          ], ...
      ]
    */
  ];

  public static function get($view,$callback) {
    $route = $view[0];
    $component = $view[1];

    self::$routes['GET'][$route]['function'] = $callback;
    self::$routes['GET'][$route]['component'] = $component;
    self::$routes['GET'][$route]['uri'] = $route;
  }

  public static function post($uri,$callback) {
    $route = $view[0];
    $component = $view[1];

    self::$routes['POST'][$route]['function'] = $callback;
    self::$routes['POST'][$route]['component'] = $component;
    self::$routes['POST'][$route]['uri'] = $route;
  }

  public static function dispatch(){
    $uri = $_SERVER['REQUEST_URI'];
    $cleanUri = explode('?',$uri)[0]; 
    $method = $_SERVER['REQUEST_METHOD'];

    foreach(self::$routes[$method] as $route){
      //echo'<p>Uri:'.$uri.' ||  Route:'.$route['uri'].'</p>';
      if($route['uri'] == $cleanUri ){
        $callback = $route['function'];
        $callback($route['component']);
        return;
      }
    };
    include '.error-pages/404-error.php';
  }
}

?>