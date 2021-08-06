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
               <form method="POST" action="{{ route('change.image') }}" enctype="multipart/form-data" class="user-img">
                  @csrf
                  @method('PUT')
                  <input type="file" id="image" name="image" class="display_none">
                  <label for="image">
                     <img id="output"
                        src="{{ $data["user"]->image?asset('storage/image/'.$data["user"]->image):'images/uploads/user-img.png' }}"
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
                     <li><a href="{{url('profile/'.$data["user"]->id)}}">{{__('message.Profile',['name' => $data['user']->name])}}</a></li>
                     <li><a href="{{ route('profile.favorite',[$data["user"]->id]) }}">{{__('message.Favorite_Book')}}</a></li>
                     <li><a href="profile/ratebook/1">{{__('message.Rated_books')}}</a></li>
                     <li class="active"><a href="{{ url('timeline/'.auth()->user()->id) }}">{{__('message.TimeLine_History')}}</a></li>
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
            {{ $data["activity"]->links() }}
            <div class="timeline">
               <ul>
                  @foreach ($data["activity"] as $activity)
                  <li>
                     <div class="timeline-content">
                        <h3>{{ __('message.atBook') }} : {{ $activity->book->title }}</h3>
                        <p>{{ __('message.activity') }} : {{ $activity->type->type }}</p>
                        <div class="time">
                           <h4>{{ date('M d/Y ', strtotime($activity->time)) . __('at') . date(' H:i A ', strtotime($activity->time)) }} </h4>
                        </div>
                     </div>
                  </li>
                  @endforeach
                  <div style="clear: both;"></div>
               </ul>
            </div>
            {{ $data["activity"]->links() }}
         </div>
      </div>
   </div>
</div>
@endsection