<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Charts as Charts;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chart["cart"]= new Charts\CartAllChart();
        $chart["revenue"]= new Charts\RevenueChart();
        return view('admin.layout.home')->with('chart', $chart);
    }
}
