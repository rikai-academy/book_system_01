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
               <tr>
                  <td class="col-md-8 col-sm-12 col-xs-12">
                     <div class="book-info">
                        <img src="images/uploads/mv1.jpg" alt="">
                        <div class="mv-item-infor">
                           <h6><a href="moviesingle.html">oblivion <span>(2012)</span></a></h6>
                           <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                           <p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
                           <p>{{__('message.Author')}}: <a href="#">Joss Whedon</a></p>
                        </div>
                        <br>
                        <a href="#" class="remove-cart">{{__('message.Remove')}}</a>
                     </div>
                  </td>
                  <td><input type="number" value="1"></td>
                  <td class="unit-total">$50</td>
               </tr>
               <tr>
                  <td class="col-md-8 col-sm-12 col-xs-12">
                     <div class="book-info">
                        <img src="images/uploads/mv1.jpg" alt="">
                        <div class="mv-item-infor">
                           <h6><a href="moviesingle.html">oblivion <span>(2012)</span></a></h6>
                           <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                           <p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
                           <p>{{__('message.Author')}}: <a href="#">Joss Whedon</a></p>
                        </div>
                        <br>
                        <a href="#" class="remove-cart">{{__('message.Remove')}}</a>
                     </div>
                  </td>
                  <td><input type="number" value="1"></td>
                  <td class="unit-total">$50</td>
               </tr>
               <tr>
                  <td class="col-md-8 col-sm-12 col-xs-12">
                     <div class="book-info">
                        <img src="images/uploads/mv1.jpg" alt="">
                        <div class="mv-item-infor">
                           <h6><a href="moviesingle.html">oblivion <span>(2012)</span></a></h6>
                           <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                           <p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
                           <p>{{__('message.Author')}}: <a href="#">Joss Whedon</a></p>
                        </div>
                        <br>
                        <a href="#" class="remove-cart">{{__('message.Remove')}}</a>
                     </div>
                  </td>
                  <td><input type="number" value="1"></td>
                  <td class="unit-total">$50</td>
               </tr>
            </table>
         </div>
         <div class="total-price">
            <table>
               <tr>
                  <td><b>{{__('message.Subtotal')}}</b></td>
                  <td>$200</td>
               </tr>
               <tr>
                  <td><b>{{__('message.Tax')}}</b></td>
                  <td>$35</td>
               </tr>
               <tr>
                  <td><b>{{__('message.Total')}}</b></td>
                  <td>$230</td>
               </tr>
               <tr>
                  <td colspan="2" class="checkoutbtn" style="text-align:center">
                     <a href="{{url('checkout')}}"><b>{{__('message.Checkout')}}</b></a>
                  </td>
               </tr>
            </table>
         </div>
      </div>
   </div>
</div>
@endsection