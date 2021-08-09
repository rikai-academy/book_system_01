@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>{{$user->name}}: {{__('message.Profile')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Favorite_Book')}}</li>
@include('users.title.footer')
<div class="page-single userfav_list">
   <div class="container">
      <div class="row ipad-width2">
         @if(Auth::user()->id == $user->id)
         <div class="col-md-3 col-sm-12 col-xs-12">
            <div class="user-information">
               <div class="user-img">
                  <a href="#"><img src="images/uploads/user-img.png" alt=""><br></a>
                  <a href="#" class="redbtn">{{__('message.Change_avatar')}}</a>
               </div>
               <div class="user-fav">
                  <p>{{__('message.Account_Details')}}</p>
                  <ul>
                     <li><a href="{{url('profile')}}">{{__('message.Profile')}}</a></li>
                     <li class="active"><a href="{{url('profile/favoritebook/'.$user->id)}}">{{__('message.Favorite_Book')}}</a></li>
                     <li><a href="{{url('profile/ratebook/'.$user->id)}}">{{__('message.Rated_books')}}</a></li>
                     <li><a href="{{url('profile/timeline/'.$user->id)}}">{{__('message.TimeLine_History')}}</a></li>
                  </ul>
               </div>
               <div class="user-fav">
                  <p>{{__('message.Others')}}</p>
                  <ul>
                     <li><a href="#">{{__('message.Change_password')}}</a></li>
                     <li><a href="{{route('logout')}}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('message.Logout') }}</a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                     </form>
                  </ul>
               </div>
            </div>
         </div>
         @endif
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="topbar-filter user">
               <p>{{__('message.Found')}} <span>{{$count}} {{__('message.Books')}}</span> {{__('message.in_total')}}</p>
            </div>
            <div class="flex-wrap-movielist user-fav-list">
               @foreach($books as $book)
               <div class="movie-item-style-2">
                  <img src="{{$book->image}}" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#"> <span>{{$book->title}}</span></a></h6>
                     <p class="run-time"><span>{{__('message.Release')}}:{{$book->publish_at}}</span></p>
                     <p>{{__('message.Author')}}: {{$book->author}}<a href="#"></a></p>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="topbar-filter">
               <label>{{__('message.Movies_per_page')}}:</label>
               <div class="pagination2">
                  {{$books->links("pagination::bootstrap-4")}}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection