<?php


namespace App\Statistics\StrategyPattern;


use App\Statistics\StrategyPattern\Interfaces\FormatStrategy;

class CsvFormatStrategy implements FormatStrategy
{
    private array $data;

    /**
     * @inheritDoc
     */
    final public function formatData(array $data): string
    {
        $lines = [];

        foreach ($this->data as $row) {
            $lines = implode(',', $row);
        }

        return implode("\n", $lines);
    }
}
