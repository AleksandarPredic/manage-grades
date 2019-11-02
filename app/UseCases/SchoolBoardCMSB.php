<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\SchoolBoardInterface;

/**
 * Class SchoolBoardCMSB
 *
 * @package PredicMVC\UseCases
 */
class SchoolBoardCMSB implements SchoolBoardInterface
{

    /**
     * Decide if the student is passed their by Board rule
     *
     * @param float $value
     * @param array $grades
     * @return bool
     */
    public function verdict(float $value, array $grades): bool
    {
        return count($grades) > 1 && $value > 8;
    }
}
