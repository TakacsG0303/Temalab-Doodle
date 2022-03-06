<?php


use PHPUnit\Framework\TestCase;

class RegexTests extends TestCase
{
    public function test_email_regex()
    {
        $this->assertTrue([\Regex::class,'email_regex'('janika.example@example.com')]);
    }
    public function test_name_regex()
    {
        $this->assertTrue([\Regex::class,'name_regex'('Jancsó Kancsó')]);
    }

}
