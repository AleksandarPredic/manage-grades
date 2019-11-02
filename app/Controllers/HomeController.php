<?php

namespace PredicMVC\Controllers;

use PredicMVC\Contracts\Controllers\RouteControllerInterface;
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
     * @param null $param1
     * @param null $param2
     * @return mixed
     */
    public function index($param1 = null, $param2 = null)
    {
        $this->view->title = $this->model->getTitle();
        $this->view->subtitle = $this->model->getSubtitle();
        $this->view->render('home/index.php');
    }

}
