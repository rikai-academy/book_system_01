<?php

namespace App\Charts;

use App\Enums\CartStatus;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;
use App\Models\Cart;
use App\Models\Statistic;

class CartAllChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->initData();
    }

    private function initData() {
        $statistic = new Statistic();
        $data = $statistic->CartStatisticDay(7);
        $this->displayLegend(true);
        $this->title('Request of this week');
        $this->labels($data["labels"]);
        $this->dataset(CartStatus::DONE, 'line', $data["done"])->color('green');
        $this->dataset(CartStatus::PENDING, 'line', $data["pending"])->color('blue');
        $this->dataset(CartStatus::CANCEL, 'line', $data["cancel"])->color('red');
    }
}
