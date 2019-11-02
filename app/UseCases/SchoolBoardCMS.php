<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\SchoolBoardInterface;

/**
 * Class SchoolBoardCMS
 *
 * @package PredicMVC\UseCases
 */
class SchoolBoardCMS implements SchoolBoardInterface
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
        return $value >= 7;
    }
}
