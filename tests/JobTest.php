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



    public function testGetters()
    {
        $expression = "* * * * *";

        $data = [
            "param1" => "hello",
            "param2" => "world"
        ];

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







        $expression = "* * * * *";

        $data = "echo 'hello world'";

        $cronJob = new Job(
            $expression,
            $data
        );



        $this->assertEquals(
            $expression,
            $cronJob->getExpression()
        );

        $this->assertEquals(
            $data,
            $cronJob->getData()
        );
    }
}
