@extends('users.layouts.index')
@section('content')
<div class="hero mv-single-hero">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
         </div>
      </div>
   </div>
</div>
<div class="page-single movie-single movie_single">
   <div class="container">
      <div class="row ipad-width2">
         <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="movie-img sticky-sb">
               <img src="images/uploads/movie-single.jpg" alt="">
               <div class="movie-btn">
                  <div class="btn-transform transform-vertical">
                     <div><a href="{{url('cart/1')}}" class="item item-1 yellowbtn"> <i class="ion-card"></i>
                           {{__('message.Buy_book')}}</a></div>
                     <div><a href="{{url('cart/1')}}" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="movie-single-ct main-content">
               <h1 class="bd-hd">{{$book->title}} <span></span></h1>
               <div class="social-btn">
                  <form action="{{ url('activity') }}" method="POST">
                     @csrf
                     <input type="hidden" name="book_id" value="{{ $book->id }}">
                     <button type="submit" name="activity" 
                        class="@if($data["activity"]->read_status == 1)
                        {{ 'active' }} @endif parent-btn" 
                        value="@if($data["activity"]->read_status == 1)
                        {{ 'unreading' }} 
                        @else {{ 'reading' }} 
                        @endif"> {{__('message.Add_to_Reading')}}</button>
                     <button type="submit" name="activity" 
                        class="parent-btn @if($data["activity"]->read_status == 2)
                        {{ 'active' }} 
                        @endif" 
                        value="@if($data["activity"]->read_status == 2) {{ 'unread' }} 
                        @else {{ 'read' }} 
                        @endif"> {{__('message.Add_to_Read')}}</button>
                     <button type="submit" name="activity" 
                        class="parent-btn @if($data["activity"]->favorite_status == 1) 
                        {{ 'active' }} 
                        @endif" 
                        value="@if($data["activity"]->favorite_status == 1) {{ 'unfavorite' }}
                        @else {{ 'favorite' }} 
                        @endif"> {{__('message.Add_to_Favorite')}}</button>
                  </form>
                  @if(session('message'))
                  <span style="color: red" role="alert">
                     <strong>{{ session('message') }}</strong>
                  </span>
                  @endif
               </div>
               <div class="movie-rate">
                  <div class="rate">
                     <i class="ion-android-star"></i>
                     <p><span>8.1</span> /10<br>
                        <span class="rv">56 {{__('message.Reviews')}}</span>
                     </p>
                  </div>
                  <div class="rate-star">
                     <p>{{__('message.Rate_This_Book')}}: </p>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star"></i>
                     <i class="ion-ios-star-outline"></i>
                  </div>
               </div>
               <div class="movie-tabs">
                  <div class="tabs">
                     <ul class="tab-links tabs-mv">
                        <li class="active"><a href="#overview">{{__('message.Overview')}}</a></li>
                        <li><a href="#reviews"> {{__('message.Reviews')}}</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="overview" class="tab active">
                           <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                                 <p>{{__('message.overview_tony')}}</p>
                                 <div class="title-hd-sm">
                                    <h4>{{__('message.User_reviews')}}</h4>
                                    <a href="#" class="time">{{__('message.See_All')}} 56 {{__('message.Reviews')}} <i
                                          class="ion-ios-arrow-right"></i></a>
                                 </div>
                                 <!-- movie user review -->
                                 <div class="mv-user-review-item">
                                    <h3>{{__('message.Best_Marvel')}}</h3>
                                    <div class="no-star">
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star"></i>
                                       <i class="ion-android-star last"></i>
                                    </div>
                                    <p class="time">
                                       17 {{__('message.December')}} 2016 {{__('message.by')}} <a href="#"> {{$book->author}}</a>
                                    </p>
                                    <p>{{__('message.this_is')}}</p>
                                 </div>
                              </div>
                              <div class="col-md-4 col-xs-12 col-sm-12">
                                 <div class="sb-it">
                                    <h6>{{__('message.Author')}}: </h6>
                                    <p><a href="#">{{$book->author}}</a>
                                 </div>
                                 <div class="sb-it">
                                    <h6>{{__('message.Category_Book')}}:</h6>
                                    <p>
                                       @foreach($categorys as $category)
                                       <a href="#">{{__("message.$category->title")}} </a>
                                       @endforeach
                                    </p>
                                 </div>
                                 <div class="sb-it">
                                    <h6>{{__('message.Release_Date')}}:</h6>
                                    <p>{{__('message.May')}} {{$book->publish_at}}</p>
                                 </div>
                                 <div class="ads">
                                    <img src="images/uploads/ads1.png" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="reviews" class="tab review">
                           <div class="row">
                              <div class="rv-hd">
                                 <div class="div">
                                    <h3>{{__('message.Related_Book')}}</h3>
                                    <h2>Skyfall: Quantum of Spectre</h2>
                                 </div>
                                 @if(!Auth::guest())
                                 <a href="{{url('addreview/'.$book->id)}}" class="redbtn">{{__('message.Write_Review')}}</a>
                                 @endif
                              </div>
                              <div class="topbar-filter">
                                 <p>{{__('message.Found')}} <span>56 {{__('message.Reviews')}}</span>
                                    {{__('message.in_total')}}</p>
                              </div>
                              @foreach($reviews as $review)
                              <div class="mv-user-review-item">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava1.jpg" alt="">
                                    <div>
                                       <a href="{{url('review/'.$review->id)}}">
                                          <h3>{{$review->title}}</h3>
                                       </a>
                                       <div class="no-star">
                                          @for($i=0; $i<= 10;$i++)
                                          @if($i<=$review->rate)
                                          <i class="ion-android-star"></i>
                                          @else
                                          <i class="ion-android-star last"></i>
                                          @endif
                                          @endfor
                                       </div>
                                       <p class="time">
                                          {{$review->created_at}}
                                          <a href="#">
                                             <?php 
                                             $user = DB::table('users')->where('id','=',$review->user_id)->value('name');
                                             echo $user;
                                             ?>
                                          </a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>{{$review->body}}</p>
                                 @if(!Auth::guest() && ($review->user_id == Auth::user()->id || Auth::user()->role=='admin'))
                                 <a href="{{url('review/'.$review->id.'/edit')}}">
                                    <h3>Edit</h3>
                                 </a>
                                 @endif
                              </div>
                              @endforeach
                              <div class="topbar-filter">
                                 <label>{{__('message.Related_Book')}}:</label>
                                 <select>
                                    <option value="range">5 {{__('message.Reviews')}}</option>
                                    <option value="saab">10 {{__('message.Reviews')}}</option>
                                 </select>
                                 <div class="pagination2">
                                    {{$reviews->links("pagination::bootstrap-4")}}
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection