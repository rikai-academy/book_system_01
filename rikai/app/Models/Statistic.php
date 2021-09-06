<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums\CartStatus;

class Statistic extends Model
{
    use HasFactory;
    public static function statisticAll(){
        $data['orders'] = Cart::count();
        $data['users'] = User::count();
        $data['ordersdone'] = Cart::where('status', '=', CartStatus::DONE)->count();  
        $data['total'] = 0;    
        $orders = Cart::where('status','=',CartStatus::DONE)->get();
            foreach($orders as $order){
                $data['total'] += $order->total_price;
            }
        return $data;
    }

    public static function statisticMonth(){
        $data = Cart::countMonthOrders();
        $data['users'] = User::count();
        return $data;
    }

    public static function statisticRevenue(){
        $data = Cart::countMonthRevenue();
        return $data;
    }
}
