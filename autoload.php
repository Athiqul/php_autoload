<?php 

spl_autoload_register(function ($classname){
    $dir='/classes/';
    $file=__DIR__.$dir.$classname.'.php';
    if(file_exists($file)){
        require_once $file;
    }
    else{
        throw new Exception('Class '.$classname.' not found');
    }
});

?>