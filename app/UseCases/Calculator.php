<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\CalculatorInterface;

/**
 * Class Calculator
 *
 * @package PredicMVC\UseCases
 */
class Calculator
{

    /**
     * Calculator object
     *
     * @var CalculatorInterface
     */
    private $calculator;

    /**
     * Calculator constructor.
     *
     * @param CalculatorInterface $calculator
     */
    public function __construct(CalculatorInterface $calculator)
    {
        $this->calculator = $calculator;
    }

    /**
     * Return average grade
     *
     * @param array $values
     * @return float
     */
    public function calculate(array $values): float
    {
        return $this->calculator->calculate($values);
    }
}
