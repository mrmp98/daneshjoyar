<?php 
require __DIR__ . '/../botstrap.php' ; 
$not = 0 ; 
// for develop localhost
$path = trim(str_replace("/mame/daneshjoyar", "", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), "/");
// for deploy
// $path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) , "/");
$rots = 
[
    'GET' =>[
        
        "" => ['controller'=> 'app\C\indexpaga'  , 'method' => 'index'] , 
        "index" => ['controller'=> 'app\C\indexpaga'  , 'method' => 'index'] , 
        "page" => ['controller'=> 'app\C\page'  , 'method' => 'index'] , 
        "signin" => ['controller'=> 'app\C\sign'  , 'method' => 'index'] , 
        "signup" => ['controller'=> 'app\C\signup'  , 'method' => 'index'] , 
    ] , 
    'POST' => [
        'signin' => ['controller'=> 'app\C\sign'  , 'method' => 'c'] , 
        'signup' => ['controller'=> 'app\C\signup'  , 'method' => 'c']
    ]
] ;  
$method = $_SERVER['REQUEST_METHOD'];

foreach($rots[$method] as $rots => $info) {
    
    if(preg_match("#^$rots$#", $path)) {

        $controller = new $info['controller'];
        $controller->{$info['method']}();
        $not = 1 ;
        return ;  
    }else
    {
       $not = 0 ; 
    }
}
echo  ($not === 0) ? require __DIR__ . '/../app/V/404/index.html' : '' ; 