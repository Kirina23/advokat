<?php

 $request = $_SERVER['REQUEST_URI'];

switch ($request) {
        case '/' :
        require __DIR__ . '/../public/index.php';
        break;
     case "/index.php":
     require __DIR__ . '/../public/index.php';
        break;
        case "/index":
     require __DIR__ . '/../public/index.php';
        break;
    case '' :
        require __DIR__ . '/../public/index.php';
        break;
    case '/about' :
        require __DIR__ . '/../public/about.php';
        break;
    case '/registration' :
        require __DIR__ . '/../public/registration.php';
        break;
    case '/court' :
        require __DIR__ . '/../public/court.php';
        break;
    case '/service' :
        require __DIR__ . '/../public/service.php';
        break;
    case '/property' :
        require __DIR__ . '/../public/property.php';
        break;
    case '/consultations' :
        require __DIR__ . '/../public/consultations.php';
        break;
     case '/read.php' :
        require __DIR__ . '/../public/read.php';
        break;
     case '/create.php' :
        require __DIR__ . '/../public/create.php';
        break;
    case '/read.php' :
        require __DIR__ . '/../public/read.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/../public/404.php';
        break;
 }
?>