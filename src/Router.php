<?php

namespace Tudublin;

class Router
{
    public function processRoute($requestArguents)
    {
        // use first word to determine controller
        $routeWord = array_shift($requestArguents);
        switch($routeWord){
            case 'admin':
                $adminController = new AdminController();
                $adminController->processRoute($requestArguents);
        }
    }

}