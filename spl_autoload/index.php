<?php 
 
 require_once __DIR__.'/vendor/autoload.php';

use App\Classes\Car;
use App\Classes\News;
use App\Models\User;
 

 $car=new Car();
 $news= new News();

$user=new User();
echo greetings();

?>