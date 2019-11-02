<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\FormatterInterface;
use PredicMVC\Models\StudentsModel;

/**
 * Class FormatterJson
 *
 * @package PredicMVC\UseCases
 */
class FormatterJson implements FormatterInterface
{

    /**
     * Output formatted data
     *
     * @param StudentsModel $student
     * @param float         $average
     * @param bool          $verdict
     * @return void
     */
    public function output(StudentsModel $student, float $average, bool $verdict): void
    {
        echo json_encode([
           'student_id' => $student->getId(),
           'name' => $student->getName(),
           'grades' => $student->getGrades(),
           'average' => $average,
           'verdict' => $verdict ? 'Passed' : 'Failed',
        ]);
    }
}
