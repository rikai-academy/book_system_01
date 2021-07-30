@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>Edward kennedy’s {{__('message.Profile')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Profile')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row ipad-width">
         <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="user-information">
               <div class="user-img">
                  <a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
                  <a href="#" class="redbtn">{{__('message.Change_avatar')}}</a>
               </div>
               <div class="user-fav">
                  <p>{{__('message.Account_Details')}}</p>
                  <ul>
                     <li  class="active"><a href="{{url('profile')}}">{{__('message.Profile')}}</a></li>
                     <li><a href="profile/favoritebook/1">{{__('message.Favorite_Book')}}</a></li>
                     <li><a href="profile/ratebook/1">{{__('message.Rated_books')}}</a></li>
                     <li><a href="profile/timeline/1">{{__('message.TimeLine_History')}}</a></li>
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
            <div class="form-style-1 user-pro" action="#">
               <form action="#" class="user">
                  <h4>01. {{__('message.Profile_details')}}</h4>
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
                           <option value="united">Vietnam</option>
                           <option value="saab">{{__('message.Others')}}</option>
                        </select>
                     </div>
                     <div class="col-md-6 form-it">
                        <label>{{__('message.State')}}</label>
                        <select>
                           <option value="united">Da nang</option>
                           <option value="saab">{{__('message.Others')}}</option>
                        </select>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <input class="submit" type="submit" value="{{__('message.save')}}">
                     </div>
                  </div>
               </form>
               <form action="#" class="password">
                  <h4>02. {{__('message.Change_password')}}</h4>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Old_Password')}}</label>
                        <input type="text" placeholder="**********">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.New_Password')}}</label>
                        <input type="text" placeholder="***************">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 form-it">
                        <label>{{__('message.Confirm_New_Password')}}</label>
                        <input type="text" placeholder="*************** ">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-2">
                        <input class="submit" type="submit" value="{{__('message.change')}}">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection