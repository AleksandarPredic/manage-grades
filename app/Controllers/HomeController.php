<?php

namespace PredicMVC\Controllers;

use PredicMVC\Contracts\RouteControllerInterface;
use PredicMVC\Libs\Controller;

/**
 * Class Home_Controller - responsible for items CRUD control
 *
 * @package PredicMVC\Controllers
 */
class HomeController extends Controller implements RouteControllerInterface
{

    /**
     * HomeControllerInterface constructor.
     *
     * @param string $name
     */
    public function __construct(string $name = '')
    {
        parent::__construct($name);
    }

    /**
     * Default controller method
     *
     * @param null $param
     * @return void
     */
    public function index($param = null): void
    {
        $this->view->title = $this->model->getTitle();
        $this->view->subtitle = $this->model->getSubtitle();
        $this->view->render('home/index.php');
    }

}
