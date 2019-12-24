<?php


namespace App\Statistics;


use App\Statistics\Interfaces\StatisticsInterface;
use stdClass;

abstract class StatisticsReport implements StatisticsInterface
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
