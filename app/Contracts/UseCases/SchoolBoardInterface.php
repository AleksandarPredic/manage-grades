<?php


namespace PredicMVC\Contracts\UseCases;

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
}
