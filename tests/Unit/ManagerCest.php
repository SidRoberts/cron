<?php

namespace Tests\Unit;

use Sid\Cron\Job;
use Sid\Cron\Manager;
use Tests\Support\UnitTester;

class ManagerCest
{
    public function addJobsToCron(UnitTester $I)
    {
        $cron = new Manager();
        
        $job1 = new Job(
            "* * * * *",
            [
                "task",
                "action",
                "params",
            ]
        );

        $job2 = new Job(
            "* * * * *",
            "echo 'hello world'"
        );



        $I->assertCount(
            0,
            $cron->getDueJobs()
        );



        $cron->add($job1);

        $I->assertCount(
            1,
            $cron->getDueJobs()
        );



        $cron->add($job2);

        $I->assertCount(
            2,
            $cron->getDueJobs()
        );
    }
}
