@extends('users.layouts.index')
@section('content')
@include('users.title.review.header')
<h1> {{__('message.Update_Comment')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span> {{__('message.Update_Comment')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row ipad-width">
         <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
               <div class="blog-detail-ct">
                  <div class="comment-form">
                     <h4>{{__('message.Update_Comment')}}</h4>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" placeholder="{{__('message.Title')}}">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <textarea name="message" id="" placeholder="{{__('message.Comments')}}"></textarea>
                           </div>
                        </div>
                        <button class="submit" type="submit" placeholder="update">{{__('message.Update')}}</button>
                     </form>
                  </div>
                  <!-- comment form -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection