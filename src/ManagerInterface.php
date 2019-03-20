<?php

namespace Sid\Cron;

interface ManagerInterface
{
    public function add(JobInterface $job);

    /**
     * @param \DateTime|string $now
     */
    public function getDueJobs($now = null) : array;

    public function getAllJobs() : array;
}
