<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\Services\Contracts\CartServiceInterface;
use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Book;

class CartItemController extends Controller
{
    protected $cartService;

    public function __construct(CartServiceInterface $cartServiceInterface)
    {
        $this->cartService = $cartServiceInterface;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = Book::find($request->book_id);
        if($book->quantity == 0) {
            return back()->with('outOfStock', __('message.outOfStock'));
        }
        $current_cart = $this->cartService->getCurrentCart(auth()->user()->id);
        $this->cartService->storeCartItem($current_cart,$request);
        return back()->with('addCartItemSuccess', __('message.addCartItemSuccess'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart_item_id)
    {
        $this->cartService->updateCartItem($request,$cart_item_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = CartItem::find($id);
        $item->delete();
        $data = $this->cartService->getCurrentCartData(auth()->user()->id);
        return back()->with('data',$data);
    }
}
