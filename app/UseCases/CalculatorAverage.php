<?php


namespace PredicMVC\UseCases;


use PredicMVC\Contracts\UseCases\CalculatorInterface;

/**
 * Class CalculatorAverage
 *
 * @package PredicMVC\UseCases
 */
class CalculatorAverage implements CalculatorInterface
{

    /**
     * Return average grade from all grades
     *
     * @param array $values
     * @return float
     */
    public function calculate(array $values): float
    {
        if (empty($values)) {
            return 0;
        }

        return array_sum($this->getValuesFromArray($values)) / count($values);
    }

    /**
     * Separate only grade values from array
     *
     * @param array $array [['subject', 'value']]
     * @return array
     */
    private function getValuesFromArray(array $array)
    {
        $gradesValues = [];
        foreach ($array as $value) {
            if (! isset($value['value'])) {
                continue;
            }
            $gradesValues[] = $value['value'];
        }

        return $gradesValues;
    }
}
