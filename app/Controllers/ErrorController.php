<?php

namespace PredicMVC\Controllers;

use PredicMVC\Libs\Controller;

/**
 * Class Error_Controller - responsible for 404 page
 *
 * @package PredicMVC\Controllers
 */
class ErrorController extends Controller
{

    /**
     * Default view
     */
    function index()
    {
        $this->view->render('error/error-404.php');
    }
}
