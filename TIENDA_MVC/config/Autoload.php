<?php
spl_autoload_register(function($class) {
    $baseDIR = __DIR__ . '/../';
    $class = str_replace('\\','/',$class);
    $parts = explode('/', $class);
    if (!empty($parts)) {
        $parts[0] = strtolower($parts[0]);
    }    
    
    $file = $baseDIR . implode('/',$parts) . '.php';
    if(file_exists($file)){
        require_once $file;
    }
});