<?php

use PHPUnit\Framework\TestCase;
require __DIR__."/../src/NextDayCalculator.php";

class NextDayCalculatorTest extends TestCase
{
    /**
     * @param $input
     * @param $expected
     * @dataProvider providerTestInput
     */
    public function test_input_date_time($input, $expected)
    {
        $nextDay = new NextDayCalculator();

        $result = $nextDay->countNextDay($input);

        $this->assertSame($expected, $result);
    }

    public function providerTestInput()
    {
        return array(
          array('2018-02-28', '2018-03-01'),
          array('2018-01-31', '2018-02-01'),
          array('2018-04-30', '2018-05-01'),
          array('2018-01-01', '2018-01-02'),
          array('2020-02-29', '2020-03-01'),
          array('2018-12-31', '2019-01-01'),
        );
    }
}
