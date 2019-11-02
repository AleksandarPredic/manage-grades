<?php


namespace PredicMVC\Contracts\UseCases;


use PredicMVC\Models\StudentsModel;

/**
 * Interface FormatterInterface
 *
 * @package PredicMVC\Contracts\UseCases
 */
interface FormatterInterface
{
    /**
     * Output formatted data
     *
     * @param StudentsModel $student
     * @param float         $average
     * @param bool          $verdict
     * @return void
     */
    public function output(StudentsModel $student, float $average, bool $verdict): void ;
}
