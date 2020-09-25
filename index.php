<?php

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
        require 'homepage.php';
        break;
    case '/PostRecipes.php':
        require 'PostRecipes.php';
        break;
    case '/Recipe.php':
        require 'Recipe.php';
        break;
    case '/RecipeFormHandler.php':
        require 'RecipeFormHandler.php';
        break;
    case '/contact.php':
        require 'contact.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}


?>