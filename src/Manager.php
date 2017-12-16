<?php

namespace Sid\Cron;

class Manager
{
    /**
     * @var array
     */
    protected $jobs = [];



    public function add(Job $job)
    {
        $this->jobs[] = $job;
    }

    /**
     * @param \DateTime|string $now
     */
    public function getDueJobs($now = null) : array
    {
        $jobs = $this->jobs;

        $jobs = array_filter(
            $jobs,
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
