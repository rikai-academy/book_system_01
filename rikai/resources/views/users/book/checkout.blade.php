@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>{{__('message.Checkout')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Checkout')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row ipad-width">
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="form-style-1 user-pro" action="#">
               <form action="#" class="#">
                  <h4>{{__('message.Checkout')}}</h4>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Username')}}</label>
                        <input type="text" placeholder="edwardkennedy">
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Email_Address')}}</label>
                        <input type="text" placeholder="edward@kennedy.com">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.First_Name')}}</label>
                        <input type="text" placeholder="Edward ">
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Last_Name')}}</label>
                        <input type="text" placeholder="Kennedy">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Country')}}</label>
                        <select>
                           <option value="united">Viet Nam</option>
                           <option value="saab">{{__('message.Others')}}</option>
                        </select>
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.State')}}</label>
                        <select>
                           <option value="united">Da Nang</option>
                           <option value="saab">{{__('message.Others')}}</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Name_on_Card')}}</label>
                        <input type="text" placeholder="">
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Credit_card_number')}}</label>
                        <input type="text" placeholder="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Expiration')}}</label>
                        <input type="text" placeholder="">
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Cvv')}}</label>
                        <input type="text" placeholder="">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <button class="submit" type="submit" placeholder="update">{{__('message.Checkout')}}</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>
</div>
@endsection