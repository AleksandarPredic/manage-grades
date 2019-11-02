<?php


namespace PredicMVC\Controllers;


use PredicMVC\Contracts\Controllers\RouteControllerInterface;
use PredicMVC\Libs\Controller;

/**
 * Class StudentsController
 *
 * @package PredicMVC\Controllers
 */
class StudentsController extends Controller implements RouteControllerInterface
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
        $this->model->setId(intval($param1));
        $this->model->loadData();

        if (! $this->model->exists()) {
            $this->redirect('', 'Student does not exists in our records');
        }

        var_dump($this->model);

        /**
         * TODO: move the migration elsewhere if I have some time left
         * $seeder = new AppMigration();
        var_dump($seeder->createTables());*/

        /* TODO: features
        - get student object
        - calculate average
        - Format result json or xml
        - output
        */
    }
}
