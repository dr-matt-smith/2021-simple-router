<?php

namespace Tudublin;

class AdminController
{

    public function processRoute($arguments)
    {
        // logic here

        print '<h1>I am in admin home!</h1>';
        print 'argument = ' . $arguments[0];

    }
}