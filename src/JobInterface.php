<?php

namespace Sid\Cron;

interface JobInterface
{
    /**
     * @param \DateTime|string $datetime
     */
    public function isDue($datetime = "now") : bool;
}
