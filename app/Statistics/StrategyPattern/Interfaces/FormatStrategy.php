<?php


namespace App\Statistics\StrategyPattern\Interfaces;


/**
 * Interface FormatStrategy
 * @package App\Statistics\StrategyPattern\Interfaces
 */
interface FormatStrategy
{
    /**
     * @param array $data
     * @return mixed
     */
    public function formatData(array $data): string;
}
