<?php

namespace App\Http\Controllers;

use App\Charts\CartAllChart;
use App\Exports\CartAllExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CartsExport;
use App\Exports\RevenueExport;
use App\Models\Statistic;
use Carbon\Carbon;

class ExcelController extends Controller
{
    public function cartAll() 
    {
        $excel = new CartAllExport();
        return Excel::download($excel, __('excel.cart-report').Carbon::now().'.xlsx');
    }

    public function revenue() 
    {
        $revenue = new RevenueExport();
        return Excel::download($revenue, __('excel.revenue-report').Carbon::now().'.xlsx');
    }
}
