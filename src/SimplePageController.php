<?php

namespace Tudublin;

class SimplePageController
{
    public function route($page)
    {
        switch($page){
            case 'contact':
                print '<h1>contact us</h1>';
                break;

            case 'home':
            default:
                $this->homePage();;
                break;
        }
    }

    private function homePage()
    {
        $html =  '<h1>hello world</h1>';
        print $html;
    }

}