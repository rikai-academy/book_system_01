@extends('users.layouts.index')
@section('content')
@include('users.title.header')
<h1>Edward kennedy’s {{__('message.Profile')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span>{{__('message.Favorite_Book')}}</li>
@include('users.title.footer')
<div class="page-single userfav_list">
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
                     <li><a href="userprofile.html">{{__('message.Profile')}}</a></li>
                     <li class="active"><a href="userfavoritelist.html">{{__('message.Favorite_Book')}}</a></li>
                     <li><a href="userrate.html">{{__('message.Rated_books')}}</a></li>
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
            <div class="topbar-filter user">
               <p>{{__('message.Found')}} <span>1,608 {{__('message.Books')}}</span> {{__('message.in_total')}}</p>
            </div>
            <div class="flex-wrap-movielist user-fav-list">
               <div class="movie-item-style-2">
                  <img src="images/uploads/mv1.jpg" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#">oblivion <span>(2012)</span></a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>8.1</span> /10</p>
                     <p class="describe">Earth's mightiest heroes must come together and learn to fight as a team if they are to stop the mischievous Loki and his alien army from enslaving humanity...</p>
                     <p class="run-time"><span>{{__('message.Release')}}: 1 {{__('message.May')}} 2015</span></p>
                     <p>{{__('message.Author')}}: <a href="#">Joss Whedon</a></p>
                  </div>
               </div>
               <div class="movie-item-style-2">
                  <img src="images/uploads/mv2.jpg" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#">into the wild <span>(2014)</span></a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.8</span> /10</p>
                     <p class="describe">As Steve Rogers struggles to embrace his role in the modern world, he teams up with a fellow Avenger and S.H.I.E.L.D agent, Black Widow, to battle a new threat...</p>
                     <p class="run-time"><span>{{__('message.Release')}}: 1 {{__('message.May')}} 2015</span></p>
                     <p>{{__('message.Author')}}: <a href="#">Anthony Russo,</a><a href="#">Joe Russo</a></p>
                  </div>
               </div>
               <div class="movie-item-style-2">
                  <img src="images/uploads/mv3.jpg" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#">blade runner  <span>(2015)</span></a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.3</span> /10</p>
                     <p class="describe">Armed with a super-suit with the astonishing ability to shrink in scale but increase in strength, cat burglar Scott Lang must embrace his inner hero and help...</p>
                     <p class="run-time"><span>{{__('message.Release')}}: 1 {{__('message.May')}} 2015</span></p>
                     <p>{{__('message.Author')}}: <a href="#">Peyton Reed</a></p>
                  </div>
               </div>
               <div class="movie-item-style-2">
                  <img src="images/uploads/mv4.jpg" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#">Mulholland pride<span> (2013)  </span></a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.2</span> /10</p>
                     <p class="describe">When Tony Stark's world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.</p>
                     <p class="run-time"><span>{{__('message.Release')}}: 1 {{__('message.May')}} 2015</span></p>
                     <p>{{__('message.Author')}}: <a href="#">Shane Black</a></p>
                  </div>
               </div>
               <div class="movie-item-style-2">
                  <img src="images/uploads/mv5.jpg" alt="">
                  <div class="mv-item-infor">
                     <h6><a href="#">skyfall: evil of boss<span> (2013)  </span></a></h6>
                     <p class="rate"><i class="ion-android-star"></i><span>7.0</span> /10</p>
                     <p class="describe">When Tony Stark's world is torn apart by a formidable terrorist called the Mandarin, he starts an odyssey of rebuilding and retribution.</p>
                     <p class="run-time"><span>{{__('message.Release')}}: 1 {{__('message.May')}} 2015</span></p>
                     <p>{{__('message.Author')}}: <a href="#">Alan Taylor</a></p>
                  </div>
               </div>
            </div>
            <div class="topbar-filter">
               <label>{{__('message.Movies_per_page')}}:</label>
               <select>
                  <option value="range">5 {{__('message.Books')}}</option>
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