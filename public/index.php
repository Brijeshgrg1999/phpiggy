<?php 
//frameworks foundation -> application class 
// Router , Vaildator , database , template engine , container . 


echo '<pre>' ; 
print_r($_SERVER) ; 
echo '</pre>' ; 
$app = include __DIR__.'/../src/App/bootstrap.php' ; // this file is returning the value -> $app ; 

$app->run() ; 
