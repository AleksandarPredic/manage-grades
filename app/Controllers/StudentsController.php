<?php


namespace PredicMVC\Controllers;


use PredicMVC\Contracts\Controllers\RouteControllerInterface;
use PredicMVC\Factories\SchoolBoardFactory;
use PredicMVC\Libs\Controller;
use PredicMVC\UseCases\Calculator;
use PredicMVC\UseCases\CalculatorAverage;

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

        /**
         * TODO: move the migration elsewhere if I have some time left
         * $seeder = new AppMigration();
         * var_dump($seeder->createTables());*/

        if (empty($param1)) {
            $this->redirect('', 'Please provide student id');
        }
        $this->model->setId(intval($param1));
        $this->model->loadData();

        if (! $this->model->exists()) {
            $this->redirect('', 'Student does not exists in our records');
        }

        var_dump($this->model);
        $grades = $this->model->getGrades();

        $calculator = new Calculator(new CalculatorAverage());
        $average = $calculator->calculate($grades);
        var_dump($average);

        $schoolBoard = SchoolBoardFactory::make($this->model->getBoardName());

        if ($schoolBoard === null) {
            $this->redirect('', 'Student does not have School Board assigned');
        }

        $verdict = $schoolBoard->verdict($average, $grades);
        var_dump($verdict);



        /* TODO: features
        - Compare results
        - Format result json or xml
        - output
        */
    }
}
