<?php

namespace Sid\Cron;

use DateTime;

class Manager implements ManagerInterface
{
    /**
     * @var array
     */
    protected $jobs = [];



    public function add(JobInterface $job)
    {
        $this->jobs[] = $job;
    }

    public function getDueJobs(DateTime $now = null) : array
    {
        $jobs = array_filter(
            $this->jobs,
            function ($job) use ($now) {
                return $job->isDue($now);
            }
        );

        return $jobs;
    }

    public function getAllJobs() : array
    {
        return $this->jobs;
    }
}
