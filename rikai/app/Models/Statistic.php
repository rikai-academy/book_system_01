<?php

namespace App\Models;

use App\Enums\CartStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Statistic extends Model
{
    use HasFactory;

    public function CartStatisticDay($days){
        $data["labels"] = collect([]);
        $data["done"] = collect([]);
        $data["pending"] = collect([]);
        $data["cancel"] = collect([]);
        $day = new Carbon();
        for($days_backwards = $days;$days_backwards >= 0; $days_backwards--) {
            $when = $day->now()->endOfWeek()->subDays($days_backwards)->format('Y-m-d');
            $data["labels"]->push($when);
            $data["done"]->push(Cart::whereDate('created_at', $when)->where('status',CartStatus::DONE)->count());
            $data["pending"]->push(Cart::whereDate('created_at', $when)->where('status',CartStatus::PENDING)->count());
            $data["cancel"]->push(Cart::whereDate('created_at', $when)->where('status',CartStatus::CANCEL)->count());
        }
        return $data;
    }

    public function RevenueDay($days){
        $data["labels"] = collect([]);
        $data["revenue"] = collect([]);
        $day = new Carbon();
        for($days_backwards = $days;$days_backwards >= 0; $days_backwards--) {
            $when = $day->now()->endOfWeek()->subDays($days_backwards)->format('Y-m-d');
            $result = DB::table('cart')->select(DB::raw('SUM(total_price) as revenue'))->whereDate('created_at', $when)->where('status',CartStatus::DONE)->pluck('revenue');
            $data["labels"]->push($when);
            $data["revenue"]->push($result[0]?$result[0]:0);
        }
        return $data;
    }
}
