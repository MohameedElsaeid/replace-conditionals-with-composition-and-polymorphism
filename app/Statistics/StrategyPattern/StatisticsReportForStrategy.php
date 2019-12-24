<?php


namespace App\Statistics\StrategyPattern;


use App\Statistics\StrategyPattern\Interfaces\FormatStrategy;

class StatisticsReportForStrategy
{
    /**
     * @var FormatStrategy
     */
    protected FormatStrategy $formatter;

    /**
     * @var array
     */
    protected array $data;

    /**
     * @return $this
     * @var FormatStrategy $formatter
     */
    final public function formatWith(FormatStrategy $formatter): self
    {
        $this->formatter = $formatter;

        return $this;
    }

    /**
     * @return mixed
     */
    final public function getData(): ?FormatStrategy
    {
        if (isset($this->formatter)) {
            return $this->formatter->formatData($this->data);
        }
        return $this->data;
    }
}
