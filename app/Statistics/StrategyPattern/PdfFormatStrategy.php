<?php


namespace App\Statistics\StrategyPattern;


use App\Statistics\StrategyPattern\Interfaces\FormatStrategy;

class PdfFormatStrategy implements FormatStrategy
{

    /**
     * @inheritDoc
     */
    final public function formatData(array $data): string
    {
        return 'build and return pdf document';
    }
}
