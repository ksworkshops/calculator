<?php
namespace phpreboot\calculator;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Tester\CommandTester;

class CalculatorCommandTest extends TestCase
{
    /**
     * @param $operator
     * @param $number
     * @param $expectedResult
     *
     * @dataProvider calculatorDataProvider
     */
    public function testNumberCanBeAdded($operator, $number, $expectedResult)
    {
        $calculator = new CommandTester(new CalculatorCommand());

        $options = [
            'operator' => $operator,
            'numbers' => $number,
        ];

        $calculator->execute($options);
        $this->assertEquals($expectedResult, $calculator->getDisplay());
    }

    public function calculatorDataProvider()
    {
        return [
            ['sum', '2,3', 5],
            ['sum', '3,6', 9],
            ['difference', '6,2', 4],
        ];
    }
}