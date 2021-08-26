<?php

namespace App\Models;

use App\Models\CartItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Enums\CartStatus;

class Cart extends Model
{
    use HasFactory;

    protected $table = "cart";

    protected $fillable = [
        'user_id',
        'total_price',
        'first_name',
        'last_name',
        'name_of_card',
        'credit_card_number',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'cart_id');
    }

    public function getCartID()
    {
        return sprintf('Cart-%03d', $this->id);
    }

    public static function countOrders(){
        $orders = Cart::select(DB::raw('count(*) as count'), DB::raw('Date(created_at) as date'))
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', date('m'))
            ->groupBy('date')
            ->pluck('count', 'date');
        return $orders;
    }

    public static function countOrdersDone(){
        $orders = Cart::select(DB::raw('count(*) as count'), DB::raw('Date(created_at) as date'))
            ->whereYear('created_at', date('Y'))
            ->whereMonth('created_at', date('m'))
            ->where('status', '=', CartStatus::DONE)
            ->groupBy('date')
            ->pluck('count', 'date');
        return $orders;
    }
}
