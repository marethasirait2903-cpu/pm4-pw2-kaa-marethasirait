<?php 

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/ProductController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 

switch ($uri) {
    
case '/':
     $controller = new HomeController(); 
    $controller->index();
    break;
    
case '/products':
     $controller = new ProductController(); 
     $controller->index(); 
     break;
     
    default: 
    http_response_code(404);
     echo "404 - Halaman tidak ditemukan"; 
    } 