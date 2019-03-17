<?php

namespace Sid\Cron\Tests\Unit;

use Codeception\TestCase\Test;

use Sid\Cron\Job;
use Sid\Cron\Manager;

class ManagerTest extends Test
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
        $cron = new Manager();
        
        $job1 = new Job(
            "* * * * *",
            [
                "task",
                "action",
                "params"
            ]
        );

        $job2 = new Job(
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
