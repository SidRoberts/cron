<?php

namespace Sid\Cron;

class Job
{
    /**
     * @var string
     */
    protected $expression;


    /**
     * @var mixed
     */
    protected $data;



    /**
     * @param string $expression
     * @param mixed  $data
     */
    public function __construct(string $expression, $data)
    {
        $this->expression = $expression;
        $this->data       = $data;
    }



    /**
     * @return string
     */
    public function getExpression() : string
    {
        return $this->expression;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }



    /**
     * @param \DateTime|string $datetime
     *
     * @return bool
     */
    public function isDue($datetime = "now") : bool
    {
        $cronExpression = \Cron\CronExpression::factory(
            $this->getExpression()
        );

        return $cronExpression->isDue($datetime);
    }
}
