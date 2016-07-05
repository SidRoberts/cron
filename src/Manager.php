<?php

namespace Sid\Cron;

class Manager
{
    /**
     * @var array
     */
    protected $jobs = [];



    /**
     * @param Job $job
     */
    public function add(Job $job)
    {
        $this->jobs[] = $job;
    }

    /**
     * @param \DateTime|string $now
     *
     * @return array
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

    /**
     * @return array
     */
    public function getAllJobs() : array
    {
        return $this->jobs;
    }
}
