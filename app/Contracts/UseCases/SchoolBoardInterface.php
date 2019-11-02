<?php


namespace PredicMVC\Contracts\UseCases;

use PredicMVC\Models\StudentsModel;

/**
 * Interface SchoolBoardInterface
 *
 * @package PredicMVC\Contracts\UseCases
 */
interface SchoolBoardInterface
{

    /**
     * Decide if the student is passed their by Board rule
     *
     * @param float $value
     * @param array $grades
     * @return bool
     */
    public function verdict(float $value, array $grades): bool;

    /**
     * Output data
     *
     * @param StudentsModel $student
     * @param float         $average
     * @param bool          $verdict
     * @return mixed
     */
    public function output(StudentsModel $student, float $average, bool $verdict);
}
