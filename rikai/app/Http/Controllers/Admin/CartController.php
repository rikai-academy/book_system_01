<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CartStatus;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use App\Library\Services\Contracts\CartServiceInterface;
use Illuminate\Support\Facades\Auth;
use App\Mail\buybooksuccess;
use App\Jobs\BuyBookJob;
use App\Enums\PermissionType;
use App\Models\Role;
use App\Notifications\OrderNotification;
use Illuminate\Support\Facades\Notification;
use App\Enums\NotificationEnum;



class CartController extends Controller
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
        $data["carts"] = $this->cartService->getCart(CartStatus::PENDING);
        $data["type"] = CartStatus::PENDING;
        return view('admin.cart.list')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["cart"] = $this->findCart($id);
        if (isset($data["cart"]["errors"])) {
            return redirect()->route('homeadmin.index')->withErrors(__($data["cart"]["errors"]));
        }
        return view('admin.cart.detail')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cart_id)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::AcceptOrder)->first();

        if($permissions){
            $users = User::all();
            $cart = $this->findCart($cart_id);
            if(isset($cart["errors"])){
                return redirect()->route('homeadmin.index')->withErrors(__($cart["errors"]));
            }
            $checkIfSuccess = $this->cartService->updateCart($request, $cart_id);
            if (!$checkIfSuccess) {
                return back()->with('data', $cart)->with('checkoutFailMessage', 'message.checkoutFail');
            }
    
            dispatch(new BuyBookJob($cart));
            $action = NotificationEnum::AcceptOrder;
            Notification::send($users , new OrderNotification($cart->id,$action));
            return back()->with('data',$cart)->with('requestResolve',__('message.requestResolve'));
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $role = Role::where('id','=',Auth::user()->roles()->value('role_id'))->first();
        $permissions = $role->permissions()->where('name','=',PermissionType::DeleteOrder)->first();

        if($permissions){
            $users = User::all();
            $cart = $this->findCart($id);
            if (isset($cart["errors"])) {
                $data["carts"] = $this->cartService->getCart(CartStatus::PENDING);
                return back()->with('data', $data)->withErrors(__($cart["errors"]));
            }
            $cart_type = $cart->status;
            $cart->delete();
            $data["carts"] = $this->cartService->getCart($cart_type);
            $action = NotificationEnum::DeleteOrder;
            Notification::send($users , new OrderNotification($cart->id,$action));
            return back()->with('data', $data);
        }else{
            $error = 'message.sufficient_permissions';
            return redirect()->route('bookadmin.index')->withErrors(__($error));
        }

    }

    public function cartType($cart_type)
    {
        $data["carts"] = $this->cartService->getCart($cart_type);
        $data["type"] = $cart_type;
        return view('admin.cart.list')->with('data', $data);
    }

    private function findCart($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            return $cart;
        } else {
            $cart["errors"] = 'message.no_cart';
            return $cart;
        }
    }

}
