<?php /** @noinspection PhpUnused */

namespace App\Http\Controllers;

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
    final public function getData(string $format = 'csv'): ?array
    {
        switch ($format) {
            case 'csv':
                return $this->getCSV();
            case 'array':
                return $this->getArray();
            case 'html':
                // format as HTML ...
                return $this->getHTML();
            case 'aif':
                return $this->getAIF();
            case 'cda':
                return $this->getCDA();
            case 'mp3':
                return $this->getMP3();
        }

        return $this->default();
    }

    private function getCSV(): string
    {
        return 'CSV';
    }

    private function getArray(): string
    {
        $lines = [];
        foreach ($this->data as $row) {
            $lines = implode(',', $row);
        }
        return implode("\n", $lines);
    }

    private function getHTML(): string
    {
        return 'HTML';
    }

    private function default(): string
    {
        return 'default';
    }

    private function getMP3(): string
    {
        return 'MP3';
    }

    private function getCDA(): string
    {
        return 'CDA';
    }

    private function getAIF(): string
    {
        return 'AIF';
    }
}
