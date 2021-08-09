<?php

class NextDayCalculator
{

    public function countNextDay($input)
    {
//        throw new Exception('This is error');
//        $tomorrow = date("$year-$month-$date", strtotime('tomorrow'));
//        return $tomorrow;
        $datetime = new DateTime("$input");
        $datetime->modify('+1 day');
        return $datetime->format('Y-m-d');
    }
}