<?php


namespace App\Statistics\Factories;


use App\Statistics\{CdaStatisticsReport,
    CvsStatisticsReport,
    HtmlStatisticsReport,
    AifStatisticsReport,
    JsonStatisticsReport,
    Mp3StatisticsReport
};

/**
 * Class StatisticsReportFactory
 * @package App\Statistics\Factories
 */
class StatisticsReportFactory
{
    /**
     * @param string $format
     * @return AifStatisticsReport|CdaStatisticsReport|CvsStatisticsReport|HtmlStatisticsReport|Mp3StatisticsReport|JsonStatisticsReport
     */
    public static function makeFor(string $format): object
    {
        switch ($format) {
            case 'csv':
                return new CvsStatisticsReport();
            case 'html':
                return new HtmlStatisticsReport();
            case 'aif':
                return new AifStatisticsReport();
            case 'cda':
                return new CdaStatisticsReport();
            case 'mp3':
                return new Mp3StatisticsReport();
            case 'json':
                return new JsonStatisticsReport();
        }
    }
}
