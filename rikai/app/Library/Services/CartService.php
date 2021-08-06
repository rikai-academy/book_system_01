<?php

namespace App\Library\Services;

use App\Library\Services\Contracts\CartServiceInterface;
use App\Models\Cart;
use App\Enums\CartStatus;
use App\Models\User;
use App\Models\CartItem;

class CartService implements CartServiceInterface
{
    public function getCurrentCart($user_id)
    {
        $user = User::find($user_id);
        $current_cart = $user->carts()->latest('created_at')->first();
        if ($current_cart && $current_cart->status == CartStatus::SHOPPING) {
            return $current_cart;
        }
        return $user->carts()->create();
    }

    public function storeCartItem($current_cart, $request)
    {
        $check = $current_cart->cartItems()->where('book_id', $request->book_id)->first();
        if ($check) {
            $check->quantity += 1;
            $check->total_price = $check->quantity * $request->price;
            $check->update();
        } else {
            $data = $request->all();
            $data["total_price"] = $data["price"] * $data["quantity"];
            $current_cart->cartItems()->create($data);
        }
    }

    public function getCurrentCartData($user_id)
    {
        $data["current_cart"] = $this->getCurrentCart($user_id);
        $data["cart_item"] = $data["current_cart"]->cartItems()->get();
        return $data;
    }

    public function updateCart($request, $cart_id)
    {
        $cart = Cart::find($cart_id);
        $data = $request->all();
        $data["status"] = CartStatus::PENDING;
        $checkIfSuccess = $cart->update($data);
        return $checkIfSuccess;
    }

    public function updateCartItem($request, $cart_item_id)
    {
        $data = $request->all();
        $cart_item = CartItem::find($cart_item_id);
        $cart_item->update($data);
    }
}
