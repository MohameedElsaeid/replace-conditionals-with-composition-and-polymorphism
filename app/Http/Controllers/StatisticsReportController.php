<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsReportController extends Controller
{
    protected $data;

    protected function initData()
    {
        // ...
    }

    public function getData($format = 'csv')
    {
        switch ($format) {
            case 'csv':
                $lines = [];
                foreach ($this->data as $row) {
                    $lines = implode(",", $row);
                }
                return implode("\n", $lines);

            case 'array':
                return $this->data;

            case 'html':
                $html = '';
                // format as HTML ...
                return $html;
        }
    }
}
