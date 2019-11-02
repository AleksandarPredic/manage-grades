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
        // Check param
        if (empty($param1)) {
            $this->redirect('', 'Please provide student id');
        }

        // Set Student object
        $this->model->setId(intval($param1));
        $this->model->loadData();

        if (! $this->model->exists()) {
            $this->redirect('', 'Student does not exists in our records');
        }

        $grades = $this->model->getGrades();

        // Calculate average
        $calculator = new Calculator(new CalculatorAverage());
        $average = $calculator->calculate($grades);

        // Get verdict
        $schoolBoard = SchoolBoardFactory::make($this->model->getBoardName());

        if ($schoolBoard === null) {
            $this->redirect('', 'Student does not have School Board assigned');
        }

        $verdict = $schoolBoard->verdict($average, $grades);

        // Output
        $schoolBoard->output($this->model, $average, $verdict);
    }
}
