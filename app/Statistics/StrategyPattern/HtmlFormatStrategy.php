<?php


namespace App\Statistics\StrategyPattern;


use App\Statistics\StrategyPattern\Interfaces\FormatStrategy;

class HtmlFormatStrategy implements FormatStrategy
{

    /**
     * @inheritDoc
     */
    final public function formatData(array $data): string
    {
        return 'make and return html';
    }
}
