<?php

use App\RomanNumerals;
use PHPUnit\Framework\TestCase;

class RomanNumeralsTest extends TestCase
{
    /** 
     * @test
     * @dataProvider checks 
     * 
     */
    function it_generates_the_roman_numeral_for_1($number, $numeral)
    {
        $this->assertEquals($numeral, RomanNumerals::generate($number));
    }

    /** @test */
    function ite_cannot_generate_a_roman_numeral_for_less_than_1()
    {
        $this->assertFalse(RomanNumerals::generate(0));
    }

    /** @test */
    function ite_cannot_generate_a_roman_numeral_for_more_than_3999()
    {
        $this->assertFalse(RomanNumerals::generate(4000));
    }

    public function checks()
    {
        return [
            [1, 'I'],
            [2, 'II'],
            [3, 'III'],
            [4, 'IV'],
            [5, 'V'],
            [6, 'VI'],
            [10, 'X'],
            [101, 'CI'],
            [420, 'CDXX'],
            [560, 'DLX']
        ];
    }
}
