@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1> {{__('message.Cart')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span> {{__('message.Cart')}}</li>
@include('users.title.footer')
<div class="page-single movie_list">
   <div class="container">
      <div class="row ipad-width2">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <table>
               <tr>
                  <th class="book">{{__('message.Books')}}</th>
                  <th class="quantity">{{__('message.Quantity')}}</th>
                  <th class="subtotal">{{__('message.Subtotal')}}</th>
               </tr>
               @foreach ($data["cart_item"] as $item)
               <tr>
                  <td class="col-md-8 col-sm-12 col-xs-12">
                     <div class="book-info">
                        <img src="images/uploads/mv1.jpg" alt="">
                        <div class="mv-item-infor">
                           <h6><a href="{{ url('book/'.$item->book->id) }}">{{ $item->book->title }}</a></h6>
                           <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                           <p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
                           <p>{{__('message.Author')}}: <a href="#">{{ $item->book->author }}</a></p>
                        </div>
                        <br>
                        @if ($data["current_cart"]->status == "shopping")
                        <form action="{{ url('cartItem/'.$item->id) }}" method="post" >
                           @csrf
                           @method('DELETE')
                           <input type="submit" class="remove-cart" value="{{__('message.Remove')}}" />
                        </form>
                        @endif
                     </div>
                  </td>
                  <td>
                     <input type="number" {{ $data["current_cart"]->status=='shopping'?'':'readonly' }} min="1" max="{{ $item->book->quantity }}" class="cart-item-input" cartItemId="{{ $item->id }}" cartPrice="{{ $item->book->price }}" value="{{ $item->quantity }}">
                  </td>
                  <td class="unit-total">{{ $item->total_price }}</td>
               </tr>    
               @endforeach
            </table>
         </div>
         <div class="total-price total-price-disable">
            <table class="custom_table">
               <tr>
                  <td><b>{{__('message.Total')}}</b></td>
                  <td id="sum" cartid="{{ $data["current_cart"]->id }}"></td>
               </tr>
               <tr>
                  <td colspan="2" class="checkoutbtn" style="text-align:center">
                     {!! customCheckout($data["current_cart"]) !!}
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection

@section('js')
   <script src="js/cartItem.js"></script>
   <script src="js/cart.js"></script>
@endsection