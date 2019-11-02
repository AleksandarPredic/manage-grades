<?php


namespace PredicMVC\Contracts\UseCases;

/**
 * Interface CalculatorInterface
 *
 * @package PredicMVC\Contracts\UseCases
 */
interface CalculatorInterface
{

    /**
     * Calculate
     *
     * @param array $values
     * @return float
     */
    public function calculate(array $values): float;
}
