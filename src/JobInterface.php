<?php

namespace Sid\Cron;

use DateTime;

interface JobInterface
{
    public function isDue(DateTime $datetime = null) : bool;
}
