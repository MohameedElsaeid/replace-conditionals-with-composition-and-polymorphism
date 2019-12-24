<?php


namespace App\Statistics\Interfaces;


/**
 * Interface StatisticsInterface
 * @package App\Statistics\Interfaces
 */
interface StatisticsInterface
{
    /**
     * @return object|null
     */
    public function initData(): ?object;

    /**
     * @return array|null
     */
    public function getData(): ?array;
}
