@extends('users.layouts.index')
@section('content')
@include('users.title.header')
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Favorite_Book')}}</li>
@include('users.title.footer')
<!-- celebrity list section-->
<div class="page-single">
   <div class="container">
      <div class="row ipad-width2">
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="topbar-filter">
               <p class="pad-change">{{__('message.Found')}} <span>{{$count}} {{__('message.Users')}}</span></p>
            </div>
            <div class="row">
               @foreach($users as $user)
               <div class="col-md-12">
                  <div class="ceb-item-style-2">
                     <img src="{{$user->image}}" alt="">
                     <div class="ceb-infor">
                        <h2>{{$user->name}}</h2>
                        <br>
                        <span>Email: {{$user->email}}</span>
                        <br>
                        <h3><a href="{{route('profile.favoritebook',[$user->id])}}">{{__('message.Favorite_Book')}}</a></h3>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="topbar-filter">
               {{$users->links("pagination::bootstrap-4")}}
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
