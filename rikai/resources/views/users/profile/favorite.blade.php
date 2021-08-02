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
               <form method="POST" action="{{ route('change.image') }}" enctype="multipart/form-data" class="user-img">
                  @csrf
                  @method('PUT')
                  <input type="file" id="image" name="image" class="display_none">
                  <label for="image">
                     <img id="output"
                        src="{{ $user->image?asset('storage/image/'.$user->image):'images/uploads/user-img.png' }}"
                        alt="" class="output_image">
                     <br>
                  </label>
                  @if(session()->has('imgChangeSuccess'))
                  <span class="success" role="alert">
                     <strong>{{ session()->get('imgChangeSuccess') }}</strong>
                  </span>
                  @endif
                  @error('image')
                  <span class="fail" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  @if(session()->has('imageError'))
                  <span class="fail" role="alert">
                     <strong>{{ session()->get('imageError') }}</strong>
                  </span>
                  @endif
                  <input type="submit" class="redbtn border_none"  value="{{__('message.Change_avatar')}}">
               </form>
               <div class="user-fav">
                  <p>{{__('message.Account_Details')}}</p>
                  <ul>
                     <li><a href="{{route('profile.show',[$user->id])}}">{{__('message.Profile',['name' => $user->name])}}</a></li>
                     <li class="active"><a href="{{ route('profile.favorite',[$user->id]) }}">{{__('message.Favorite_Book')}}</a></li>
                     <li><a href="{{ route('profile.ratebook',[auth()->user()->id]) }}">{{__('message.Rated_books')}}</a></li>
                     <li><a href="{{ route('profile.timeline',[auth()->user()->id]) }}">{{__('message.TimeLine_History')}}</a></li>
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
         @endif
         <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="topbar-filter user">
               <p>{{__('message.Found')}} <span>{{$count}} {{__('message.Books')}}</span> {{__('message.in_total')}}</p>
            </div>
            <div class="flex-wrap-movielist user-fav-list">
               @foreach($books as $book)
               <div class="movie-item-style-2">
               <img src="{{asset('/upload/book/'.$book->image)}}" class="output_image" alt="">
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