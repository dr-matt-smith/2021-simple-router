<?php

namespace Tudublin;

class Application
{
    private array $requestUrlParts;

    // get bits from URL and put into array
    // e.g. /www.me.com/hello/matt >>
    //          ['hello', 'matt'] stored in property $this->requestUrlParts
    public function __construct()
    {
        $ROOT = $_SERVER['DOCUMENT_ROOT'];
        $requestUrl = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
        $requestUrl = rtrim($requestUrl, '/');
        $requestUrl = strtok($requestUrl, '?');

        $this->requestUrlParts  = explode('/', $requestUrl);
        array_shift($this->requestUrlParts );
    }

    // no arguments - home page or 404 page
    // 1 arguemnt - static page (contact us etc.) - hard-coded HTML to be returned
    // 2+ arguments - there are options ....
    public function run()
    {
        $numArguments = count($this->requestUrlParts);

        switch($numArguments) {
            // home page (no arguments)
            case 0:
                $simplePageController = new SimplePageController();
                $simplePageController->route('home');
                break;

            // some other simple page, like 'contact'
            case 1:

                $page = $this->requestUrlParts[0];
                $this->simpleRoute($page);
                break;

            // 2 or more arguments
            default:
                $router = new Router();
                $router->processRoute($this->requestUrlParts);
        }
    }

    public function simpleRoute($page)
    {
        switch($page){
            case 'contact':
                print '<h1>contact us</h1>';
                break;

            case 'home':
                $this->homePage();;
                break;

            default:
                $this->page404();;
                break;
        }
    }

    private function homePage()
    {
        $html =  '<h1>hello world</h1>';
        print $html;
    }

    private function page404()
    {
        $html =  '<h1>404 - sorry no such pagfe</h1>';
        print $html;
    }
}