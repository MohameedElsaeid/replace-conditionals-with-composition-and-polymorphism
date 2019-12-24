<?php


namespace App\Statistics\StrategyPattern\Factories;


use App\Statistics\StrategyPattern\CsvFormatStrategy;
use App\Statistics\StrategyPattern\HtmlFormatStrategy;
use App\Statistics\StrategyPattern\JsonFormatStrategy;
use App\Statistics\StrategyPattern\PdfFormatStrategy;

/**
 * Class FormatStrategiesFactory
 * @package App\Statistics\StrategyPattern\Factories
 */
class FormatStrategiesFactory
{
    /**
     * @param $format
     * @return CsvFormatStrategy|HtmlFormatStrategy|JsonFormatStrategy|PdfFormatStrategy
     */
    public static function makeFor(string $format)
    {
        switch ($format) {
            case 'csv':
                return new CsvFormatStrategy();
            case 'html':
                return new HtmlFormatStrategy();
            case 'pdf':
                return new PdfFormatStrategy();
            case 'json':
                return new JsonFormatStrategy();
        }
    }
}
