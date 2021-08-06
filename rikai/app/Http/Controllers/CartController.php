<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Enums\CartStatus;
use App\Http\Requests\CheckoutCartRequest;
use App\Library\Services\Contracts\CartServiceInterface;

class CartController extends Controller
{
    protected $cartService;

    public function __construct(CartServiceInterface $cartServiceInterface)
    {
        $this->cartService = $cartServiceInterface;
    }

    
    public function update(CheckoutCartRequest $request, $cart_id)
    {
        $cart = Cart::find($cart_id);
        $checkIfSuccess = $this->cartService->updateCart($request,$cart_id);
        if(!$checkIfSuccess) {
            return back()->with('data',$cart)->with('checkoutFailMessage','message.checkoutFail');
        }
        return redirect('home')->with('message',__('message.checkoutSuccess'));
    }

    public function currentCart() {
        $data = $this->cartService->getCurrentCartData(auth()->user()->id);
        return view('users.book.cart')->with('data',$data);
    }

    public function checkout()
    {
        $data = $this->cartService->getCurrentCart(auth()->user()->id);
        return view('users.book.checkout')->with('data',$data);
    }

    public function updateTotal(Request $request, $id){
        $cart = Cart::find($id);
        $data = $request->all();
        $cart->update($data);
    }
}
