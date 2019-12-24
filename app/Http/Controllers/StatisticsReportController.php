<?php /** @noinspection PhpUnused */

namespace App\Http\Controllers;

use App\Statistics\Factories\StatisticsReportFactory;
use App\Statistics\StrategyPattern\Factories\FormatStrategiesFactory;
use App\Statistics\StrategyPattern\StatisticsReportForStrategy;

/**
 * Class StatisticsReportController
 * @package App\Http\Controllers
 */
class StatisticsReportController extends Controller
{
    /*
     * Replace Conditionals With Composition First of all,
     * let’s remember, what does the composition mean in object-oriented programming.
     * Composition combines different simple
     * transparent and independent objects into one complex whole thing. With composition,
     * we have two options here.
     * We can replace conditional with Strategy or with State.
     * These two patterns are closely related. In both patterns,
     * we inject some encapsulated behavior in the original object.
     * In State in choose behavior according to an object’s internal state (one or many property values).
     * And in Strategy,
     * we make a decision what kind of behavior we need according to how we want things to be processed.
     */
    /**
     * @param string $format
     * @return null|array|string
     */
    final public function getJsonReport(string $format = 'json'): ?array
    {
        $jsonReport = StatisticsReportFactory::makeFor($format);
        return $jsonReport->getData();
    }

    final public function getJsonReportWithStrategy(string $format = 'html'): string
    {
        $strategy = FormatStrategiesFactory::makeFor($format);
        $report = new StatisticsReportForStrategy;
        return $report->formatWith($strategy)->getData();
    }
}
