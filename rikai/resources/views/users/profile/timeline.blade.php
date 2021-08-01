@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>Edward kennedy’s {{__('message.Profile')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Time_Line_History')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row ipad-width2">
         <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="user-information">
               <div class="user-img">
                  <a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
                  <a href="#" class="redbtn">{{__('message.Change_avatar')}}</a>
               </div>
               <div class="user-fav">
                  <p>{{__('message.Account_Details')}}</p>
                  <ul>
                     <li><a href="#">{{__('message.Profile')}}</a></li>
                     <li><a href="#">{{__('message.Favorite_Book')}}</a></li>
                     <li class="active"><a href="#">{{__('message.Rated_books')}}</a></li>
                  </ul>
               </div>
               <div class="user-fav">
                  <p>{{__('message.Others')}}</p>
                  <ul>
                     <li><a href="#">{{__('message.Change_password')}}</a></li>
                     <li><a href="#">{{__('message.Log_out')}}</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="timeline">
               <ul>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}1</h3>
                        <p>{{__('message.This_is_history')}} 1</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}2</h3>
                        <p>{{__('message.This_is_history')}} 2</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}3</h3>
                        <p>{{__('message.This_is_history')}} 3</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}4</h3>
                        <p>{{__('message.This_is_history')}} 4</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}5</h3>
                        <p>{{__('message.This_is_history')}} 5</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="timeline-content">
                        <h3>{{__('message.Heading')}}6</h3>
                        <p>{{__('message.This_is_history')}} 6</p>
                        <div class="time">
                           <h4>{{__('message.July')}} 2021</h4>
                        </div>
                     </div>
                  </li>
                  <div style="clear: both;"></div>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection