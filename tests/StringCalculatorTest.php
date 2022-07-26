<?php

use hotwebmatter\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    protected $StringCalculator;

    public function setUp(): void 
    {
        $this->StringCalculator = new StringCalculator();
    }

    /**
     * @test
     * */
    public function when_adding_an_empty_string_it_should_return_zero(): void 
    {
        $numbers = "";
        $this->assertEquals(0, $this->StringCalculator->Add($numbers));
    }

    /**
     * @test
     * */
    public function when_adding_a_single_number_it_should_return_itself(): void 
    {
        $numbers = "42";
        $this->assertEquals(42, $this->StringCalculator->Add($numbers));
    }

    /**
     * @test
     * */
    public function when_adding_two_numbers_it_should_return_their_sum(): void 
    {
        $numbers = "42,20";
        $this->assertEquals(62, $this->StringCalculator->Add($numbers));
    }
    /**
     * @test
     * */
    public function when_adding_arbitrary_numbers_it_should_return_their_sum(): void 
    {
        $numbers = "42,20,10,8,7,4";
        $this->assertEquals(91, $this->StringCalculator->Add($numbers));
    }
    /**
     * @test
     * */
    public function when_adding_arbitrary_numbers_delimited_by_comma_or_new_line_it_should_return_their_sum(): void 
    {
        $numbers = '42,20\n10,8,7\n4';
        $this->assertEquals(91, $this->StringCalculator->Add($numbers));
    }
}