<?php

namespace Sid\Cron\Tests\Unit;

use Codeception\TestCase\Test;

use Sid\Cron\Job;

class JobTest extends Test
{
    protected function _before()
    {
    }

    protected function _after()
    {
    }



    /**
     * @dataProvider providerGetters
     */
    public function testGetters(string $expression, $data)
    {
        $job = new Job(
            $expression,
            $data
        );



        $this->assertEquals(
            $expression,
            $job->getExpression()
        );

        $this->assertEquals(
            $data,
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
