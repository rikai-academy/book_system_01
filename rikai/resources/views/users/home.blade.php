@extends('users.layouts.index')
@section('content')
@include('users.layouts.slide')
<div class="movie-items">
   <div class="container">
      <div class="row ipad-width">
         <div class="col-md-8">
            <div class="title-hd">
               <h2>{{__('in_library')}}</h2>
               <a href="#" class="viewall">{{__('message.View_all')}} <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="tabs">
               <ul class="tab-links">
                  <li class="active"><a href="#tab1">{{__('message.#Popular')}}</a></li>
                  <li><a href="#tab2"> {{__('message.#Coming_soon')}}</a></li>
                  <li><a href="#tab3">  {{__('message.#Top_rated')}}  </a></li>
                  <li><a href="#tab4"> {{__('message.#Most_reviewed')}}</a></li>
               </ul>
               <div class="tab-content">
                  <div id="tab1" class="tab active">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab2" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab3" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab4" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}}<i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="title-hd">
               <h2>on tv</h2>
               <a href="#" class="viewall">{{__('message.View_all')}} <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="tabs">
               <ul class="tab-links-2">
                  <li><a href="#tab21">{{__('message.#Popular')}}</a></li>
                  <li class="active"><a href="#tab22"> {{__('message.#Coming_soon')}}</a></li>
                  <li><a href="#tab23">  {{__('message.#Top_rated')}}  </a></li>
                  <li><a href="#tab24"> {{__('message.#Most_reviewed')}}</a></li>
               </ul>
               <div class="tab-content">
                  <div id="tab21" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab22" class="tab active">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab23" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item1.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item2.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item4.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="tab24" class="tab">
                     <div class="row">
                        <div class="slick-multiItem">
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item5.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Interstellar</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item6.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The revenant</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item7.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item8.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">The walk</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                           <div class="slide-it">
                              <div class="movie-item">
                                 <div class="mv-img">
                                    <img src="images/uploads/mv-item3.jpg" alt="" width="185" height="284">
                                 </div>
                                 <div class="hvr-inner">
                                    <a  href="moviesingle.html"> {{__('message.Read_more')}} <i class="ion-android-arrow-dropright"></i> </a>
                                 </div>
                                 <div class="title-in">
                                    <h6><a href="#">Die hard</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4">
            <div class="sidebar">
               <div class="ads">
                  <img src="images/uploads/ads1.png" alt="" width="336" height="296">
               </div>
               <div class="celebrities">
                  <h4 class="sb-title">{{__('message.Spotlight_Celebrities')}}</h4>
                  <div class="celeb-item">
                     <a href="#"><img src="images/uploads/ava1.jpg" alt="" width="70" height="70"></a>
                     <div class="celeb-author">
                        <h6><a href="#">Samuel N. Jack</a></h6>
                        <span>{{__('message.Author')}}</span>
                     </div>
                  </div>
                  <div class="celeb-item">
                     <a href="#"><img src="images/uploads/ava2.jpg" alt="" width="70" height="70"></a>
                     <div class="celeb-author">
                        <h6><a href="#">Benjamin Carroll</a></h6>
                        <span>{{__('message.Author')}}</span>
                     </div>
                  </div>
                  <div class="celeb-item">
                     <a href="#"><img src="images/uploads/ava3.jpg" alt="" width="70" height="70"></a>
                     <div class="celeb-author">
                        <h6><a href="#">Beverly Griffin</a></h6>
                        <span>{{__('message.Author')}}</span>
                     </div>
                  </div>
                  <div class="celeb-item">
                     <a href="#"><img src="images/uploads/ava4.jpg" alt="" width="70" height="70"></a>
                     <div class="celeb-author">
                        <h6><a href="#">Justin Weaver</a></h6>
                        <span>{{__('message.Author')}}</span>
                     </div>
                  </div>
                  <a href="#" class="btn">{{__('message.See_all_celebrities')}}<i class="ion-ios-arrow-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection