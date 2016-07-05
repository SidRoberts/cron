<?php

namespace Sid\Cron\Tests\Unit;

class JobTest extends \Codeception\TestCase\Test
{
    /**
     * @var \UnitTester
     */
    protected $tester;

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

        $job = new \Sid\Cron\Job(
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

        $cronJob = new \Sid\Cron\Job(
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
