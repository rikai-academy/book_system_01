@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>{{__('message.Book_Listing_-_Grid_Fullwidth')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span> {{__('message.book_listing')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="topbar-filter fw">
               <p>{{__('message.Found')}} <span>1,608 {{__('message.Books')}}</span> {{__('message.in_total')}}</p>
            </div>
            <div class="flex-wrap-movielist mv-grid-fw">
               @foreach($books as $book)
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="{{$book->image}}" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/'.$book->id)}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">{{$book->title}}</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="topbar-filter">
               <label>{{__('message.Book_per_page')}}:</label>
               <select>
                  <option value="range">20 {{__('message.Books')}}</option>
                  <option value="saab">10 {{__('message.Books')}}</option>
               </select>
               <div class="pagination2">
                  <span>{{__('message.pages')}} 1 {{__('message.of')}} 2:</span>
                  <a class="active" href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  <a href="#">...</a>
                  <a href="#">78</a>
                  <a href="#">79</a>
                  <a href="#"><i class="ion-arrow-right-b"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection