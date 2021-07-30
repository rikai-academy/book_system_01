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
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv1.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">oblivion</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv2.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">into the wild</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item3.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">Die hard</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item4.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">The walk</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv3.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">blade runner  </a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.3</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv4.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">Mulholland pride</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.2</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv5.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">skyfall: evil of boss</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.0</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item1.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">Interstellar</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item2.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">The revenant</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-it10.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">harry potter</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-it11.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">guardians galaxy</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-it12.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">the godfather</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item6.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">blue velvet</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item7.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">gravity</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item8.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">southpaw</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-it9.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">jurassic park</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item9.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">the forest</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item10.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">spectre</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item11.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">strager things</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv-item12.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">la la land</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.4</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv1.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">oblivion</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                  </div>
               </div>
               <div class="movie-item-style-2 movie-item-style-1">
                  <img src="images/uploads/mv2.jpg" alt="">
                  <div class="hvr-inner">
                     <a  href="{{url('book/1')}}"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                  </div>
                  <div class="mv-item-infor">
                     <h6><a href="#">into the wild</a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
                  </div>
               </div>
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