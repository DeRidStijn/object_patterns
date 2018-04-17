<?php
/**
 * Created by PhpStorm.
 * User: deridstijn
 * Date: 4/17/18
 * Time: 11:18 AM
 */


class simpleCalculatorTest extends \PHPUnit\Framework\TestCase
{
    protected $simpleCalculator;

    public function setup(){
        $this->simpleCalculator= new SimpleCalculator();
    }
    /**
     * @test
     */
    public function calculatorDoesSumCorrectly(){
        $testResult = $this->simpleCalculator->sum(1,4);
        $expectedResult = 5;
        $this->assertEquals($expectedResult, $testResult, "the sum of 1 and 4 did not seem to be 5");
    }

    /**
     * @test
     */
    public function calculatorDoesSubtractCorrectly(){
        $testResult = $this->simpleCalculator->subtract(4,1);
        $expectedResult = 3;
        $this->assertEquals($expectedResult, $testResult, "substracting 4 with 1 does not seem to be 3");
    }

    /**
     * @test
     */
    public function calculatorMultipliesCorrectly(){
        $testResult = $this->simpleCalculator->multiply(2,3);
        $expectedResult = 6;
        $this->assertEquals($expectedResult, $testResult, "the calculator did not multiply 2 and 3 correctly");
    }
    /**
     * @test
     */
    public function calculatorDoesDivideByCorrectly(){
        $testResult = $this->simpleCalculator->divideBy(10,2);
        $expectedResult = 5;
        $this->assertEquals($expectedResult, $testResult, "the calculator did not get 5 after dividing 10 by 2");
    }

    /**
     * @test
     */
    public function calculatorAcceptsFloats(){
        $testResult = $this->simpleCalculator->sum(4.55, 6.17);
        $expectedResult = 10.72;
        $this->assertEquals($expectedResult, $testResult, "the calculator does not seem to work with floats");
    }

    /**
     * @test
     */
    public function calculatorAddsZeroWhenTooFewArgumentsAreSupplied(){
        $testResult = $this->simpleCalculator->sum(10);
        $expectedResult = 10;
        $this->assertEquals($expectedResult, $testResult, "the calculator did not add 0 when only 1 argument got supplied");
    }



}
