<?php


namespace App\Statistics\StrategyPattern;


use App\Statistics\StrategyPattern\Interfaces\FormatStrategy;

class JsonFormatStrategy implements FormatStrategy
{

    /**
     * @inheritDoc
     */
    final public function formatData(array $data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR, 512);
    }
}
