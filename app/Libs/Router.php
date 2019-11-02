<?php

namespace PredicMVC\Libs;

use PredicMVC\Controllers\ErrorController;

/**
 * Class Router - map url to MVC pattern
 *
 * @package PredicMVC\Libs
 */
class Router
{

    /**
     * Router constructor. Set current Controller
     */
    public function __construct()
    {

        if (isset($_SERVER['SERVER_SOFTWARE']) && false === strpos($_SERVER['SERVER_SOFTWARE'], 'nginx')) {
            // Apache
            $url = ! empty($_GET['url']) ? $_GET['url'] : null;
        } else {
            // Nginx
            $url = ! empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : null;
        }

        $url = trim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('?', $url);
        $url = explode('/', $url[0]);

        $controller = ! empty($url[0]) ? $url[0] : 'Home';
        $function = 'index';
        $parameter1 = ! empty($url[1]) ? $url[1] : '';

        $controllerName = '\PredicMVC\Controllers\\' . ucfirst($controller) . 'Controller';

        if (class_exists($controllerName)) {
            $controller = new $controllerName($controller);
        } else {
            $this->error404();
        }

        if (! empty($function)) {
            if (! method_exists($controller, $function)) {
                $this->error404();
            }
            if (! empty($parameter1)) {
                $controller->{$function}($parameter1);
            } else {
                $controller->{$function}();
            }
        } else {
            $controller->index();
        }
    }

    /**
     * 404 page Controller init
     */
    private function error404(): void
    {
        $controller = new ErrorController('Error');
        $controller->index();
        die();
    }

}
