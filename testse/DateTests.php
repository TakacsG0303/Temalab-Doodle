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
    
    public function test_end_date_after_start_date_01(){
        $this->assertTrue([\DateValidates::class,'endDateAfterStartDate'('2022-03-07T10:56:50.725Z','2022-03-07T20:15:50.725Z')]);
    }
    public function test_end_date_after_start_date_02(){
        $this->assertFalse([\DateValidates::class,'endDateAfterStartDate'('2022-03-07T11:00:50.725Z','2022-03-07T10:56:50.725Z')]);
    }
    public function test_start_date_later_now_date_01(){
        $dateNow = date('Y-m-d\TH:i:s');
        $dateFuture = date('Y-m-d\TH:i:s', strtotime('+1 day', $dateNow));
        $this->assertTrue([\DateValidates::class,'endDateNotLaterNowDate'($dateFuture)]);
    }
    public function test_start_date_later_now_date_02(){
        $this->assertFalse([\DateValidates::class,'endDateNotLaterNowDate'('2020-03-07T11:00:50.725Z')]);
    }
}
?>