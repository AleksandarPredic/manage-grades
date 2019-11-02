<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\FormatterInterface;
use PredicMVC\Models\StudentsModel;
use \SimpleXMLElement;

/**
 * Class FormaterXML
 *
 * @package PredicMVC\UseCases
 */
class FormaterXML implements FormatterInterface
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
        $data = [
            'student_id' => $student->getId(),
            'name' => $student->getName(),
            'grades' => $student->getGrades(),
            'average' => $average,
            'verdict' => $verdict ? 'Passed' : 'Failed',
        ];
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($data, array ($xml, 'addChild'));

        echo $xml->asXML();
    }
}
