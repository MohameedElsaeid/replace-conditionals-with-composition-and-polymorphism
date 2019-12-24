<?php /** @noinspection PhpUnused */

namespace App\Http\Controllers;

use App\Statistics\Factories\StatisticsReportFactory;

/**
 * Class StatisticsReportController
 * @package App\Http\Controllers
 */
class StatisticsReportController extends Controller
{
    /*
     * This class violates Open-Closed Principle, which says:
     * software entities (classes, modules, functions, etc.) should be open for extension, but closed for modification
     *
     * But in our case,
     * our class StatisticsReport is closed for extension,
     * because every time when we need to add/extend some functionality,
     * we should go and change its source code. Now it is clear,
     * that condition here is a code smell. So how to fix it ?
     * How can we make this class opened for extension,
     * and add new functionality to it without changing its source code
     */

    /**
     * @var array
     */
    protected array $data;

    /**
     *
     */
    final public function initData(): string
    {
        return 'init for data';
    }

    /**
     * @param string $format
     * @return null|array|string
     */
    final public function getJsonReport(string $format = 'json'): ?array
    {
        $jsonReport = StatisticsReportFactory::makeFor($format);
        return $jsonReport->getData();
    }
}
