<?php

namespace Sid\Cron\Tests\Unit;

class ManagerTest extends \Codeception\TestCase\Test
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



    public function testAddJobsToCron()
    {
        $cron = new \Sid\Cron\Manager();
        
        $job1 = new \Sid\Cron\Job(
            "* * * * *",
            [
                "task",
                "action",
                "params"
            ]
        );

        $job2 = new \Sid\Cron\Job(
            "* * * * *",
            "echo 'hello world'"
        );



        $this->assertEquals(
            0,
            count(
                $cron->getDueJobs()
            )
        );



        $cron->add($job1);

        $this->assertEquals(
            1,
            count(
                $cron->getDueJobs()
            )
        );



        $cron->add($job2);

        $this->assertEquals(
            2,
            count(
                $cron->getDueJobs()
            )
        );
    }
}
