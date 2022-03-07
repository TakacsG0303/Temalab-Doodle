<?php

use PHPUnit\Framework\TestCase;

class DateTests extends TestCase
{
    public function test_dates_between_min_1h_01(){
        $this->assertTrue([\DateValidates::class,'datesBetweenMin1h'('2022-03-07T10:56:50.725Z','2022-03-07T20:15:50.725Z')]);
    }
    public function test_dates_between_min_1h_02(){
        $this->assertFalse([\DateValidates::class,'datesBetweenMin1h'('2022-03-07T10:56:50.725Z','2022-03-07T11:00:50.725Z')]);
    }
}
?>