<?php


namespace App\Statistics;


use stdClass;

abstract class StatisticsReport
{
    protected array $data;

    public function initData(): ?object
    {
        return new stdClass();
    }

    public function getData(): ?array
    {
        return $this->data;
    }
}
