<?php

namespace Sid\Cron;

class Factory
{
    public static function buildFromArray(array $array) : Manager
    {
        $manager = new Manager();

        foreach ($array as $jobArray) {
            $expression = $jobArray[0];
            $data       = $jobArray[1];

            $job = new Job($expression, $data);

            $manager->add($job);
        }

        return $manager;
    }
}
