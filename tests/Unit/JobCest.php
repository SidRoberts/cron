<?php

namespace Tests\Unit;

use Codeception\Example;
use Sid\Cron\Job;
use Tests\Support\UnitTester;

class JobCest
{
    /**
     * @dataProvider providerGetters
     */
    public function getters(UnitTester $I, Example $example)
    {
        $job = new Job(
            $example["expression"],
            $example["data"]
        );



        $I->assertEquals(
            $example["expression"],
            $job->getExpression()
        );

        $I->assertEquals(
            $example["data"],
            $job->getData()
        );
    }



    public function providerGetters()
    {
        return [
            [
                "expression" => "* * * * *",
                "data"       => [
                    "param1" => "hello",
                    "param2" => "world",
                ],
            ],

            [
                "expression" => "* * * * *",
                "data"       => "echo 'hello world'",
            ],
        ];
    }
}
