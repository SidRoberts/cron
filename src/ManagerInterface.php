<?php

namespace Sid\Cron;

use DateTime;

interface ManagerInterface
{
    public function add(JobInterface $job);

    public function getDueJobs(DateTime $now = null) : array;

    public function getAllJobs() : array;
}
