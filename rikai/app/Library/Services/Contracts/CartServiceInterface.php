<?php
namespace App\Library\Services\Contracts;

Interface CartServiceInterface
{
    public function getCurrentCart($user_id);

    public function storeCartItem($current_cart,$request);

    public function getCurrentCartData($user_id);

    public function updateCart($request,$cart_id);

    public function updateCartItem($request,$cart_item_id);
}