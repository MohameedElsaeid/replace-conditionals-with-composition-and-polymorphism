<?php /** @noinspection PhpUnused */

namespace App\Http\Controllers;

/**
 * Class StatisticsReportController
 * @package App\Http\Controllers
 */
class StatisticsReportController extends Controller
{
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
    final public function getData(string $format = 'csv'): ?array
    {
        switch ($format) {
            case 'csv':
                $lines = [];
                foreach ($this->data as $row) {
                    $lines = implode(',', $row);
                }
                return implode("\n", $lines);
            case 'array':
                return $this->data;
            case 'html':
                // format as HTML ...
                return 'html';
        }
    }
}
