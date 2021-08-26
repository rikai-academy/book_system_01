<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Statistic;
use App\Enums\CartStatus;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders= Cart::countOrders();
        $data = Statistic::statisticAll();
        $ordersdone = Cart::countOrdersDone();
        return view('admin.chart.index',compact(['orders', 'data','ordersdone']));
    }

}
