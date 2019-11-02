<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\FormatterInterface;
use PredicMVC\Contracts\UseCases\SchoolBoardInterface;
use PredicMVC\Models\StudentsModel;

/**
 * Class SchoolBoardCMS
 *
 * @package PredicMVC\UseCases
 */
class SchoolBoardCMS implements SchoolBoardInterface
{

    /**
     * Output and format data
     *
     * @var FormatterInterface
     */
    private $formatter;

    /**
     * SchoolBoardCMS constructor.
     *
     * @param FormatterInterface $formatter
     */
    public function __construct(FormatterInterface $formatter)
    {
        $this->formatter = $formatter;
    }

    /**
     * Decide if the student is passed their by Board rule
     *
     * @param float $value
     * @param array $grades
     * @return bool
     */
    public function verdict(float $value, array $grades): bool
    {
        return $value >= 7;
    }

    /**
     * Output data
     *
     * @param StudentsModel $student
     * @param float         $average
     * @param bool          $verdict
     * @return mixed
     */
    public function output(StudentsModel $student, float $average, bool $verdict)
    {
        $this->formatter->output($student, $average, $verdict);
    }
}
