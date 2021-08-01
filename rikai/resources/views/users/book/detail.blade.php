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
                     <div><a href="{{url('cart/1')}}" class="item item-1 yellowbtn"> <i class="ion-card"></i> {{__('message.Buy_book')}}</a></div>
                     <div><a href="{{url('cart/1')}}" class="item item-2 yellowbtn"><i class="ion-card"></i></a></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="movie-single-ct main-content">
               <h1 class="bd-hd">Skyfall: Quantum of Spectre <span>2015</span></h1>
               <div class="social-btn">
                  <form>
                     <button type="submit" class="parent-btn"> {{__('message.Add_to_Reading')}}</button>
                     <button type="submit" class="parent-btn"> {{__('message.Add_to_Read')}}</button>
                     <button type="submit" class="parent-btn"> {{__('message.Add_to_Favorite')}}</button>
                  </form>
               </div>
               <div class="movie-rate">
                  <div class="rate">
                     <i class="ion-android-star"></i>
                     <p><span>8.1</span> /10<br>
                        <span class="rv">56 {{__('message.Reviews')}}</span>
                     </p>
                  </div>
                  <div class="rate-star">
                     <p>{{__('message.Rate_This_Book')}}:  </p>
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
                        <li><a href="#moviesrelated"> {{__('message.Related_Book')}}</a></li>
                     </ul>
                     <div class="tab-content">
                        <div id="overview" class="tab active">
                           <div class="row">
                              <div class="col-md-8 col-sm-12 col-xs-12">
                                 <p>Tony Stark creates the Ultron Program to protect the world, but when the peacekeeping program becomes hostile, The Avengers go into action to try and defeat a virtually impossible enemy together. Earth's mightiest heroes must come together once again to protect the world from global extinction.</p>
                                 <div class="title-hd-sm">
                                    <h4>{{__('message.User_reviews')}}</h4>
                                    <a href="#" class="time">{{__('message.See_All')}} 56 {{__('message.Reviews')}} <i class="ion-ios-arrow-right"></i></a>
                                 </div>
                                 <!-- movie user review -->
                                 <div class="mv-user-review-item">
                                    <h3>Best Marvel movie in my opinion</h3>
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
                                       17 {{__('message.December')}} 2016 {{__('message.by')}} <a href="#"> hawaiipierson</a>
                                    </p>
                                    <p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
                                 </div>
                              </div>
                              <div class="col-md-4 col-xs-12 col-sm-12">
                                 <div class="sb-it">
                                    <h6>{{__('message.Author')}}: </h6>
                                    <p><a href="#">Joss Whedon,</a> <a href="#">Stan Lee</a></p>
                                 </div>
                                 <div class="sb-it">
                                    <h6>{{__('message.Category_Book')}}:</h6>
                                    <p><a href="#">{{__('message.Action')}}, </a> <a href="#"> Sci-Fi,</a> <a href="#">{{__('message.Adventure')}}</a></p>
                                 </div>
                                 <div class="sb-it">
                                    <h6>{{__('message.Release_Date')}}:</h6>
                                    <p>{{__('message.May')}} 1, 2015 (U.S.A)</p>
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
                                 <a href="{{url('review/create')}}" class="redbtn">{{__('message.Write_Review')}}</a>
                              </div>
                              <div class="topbar-filter">
                                 <p>{{__('message.Found')}} <span>56 {{__('message.Reviews')}}</span> {{__('message.in_total')}}</p>
                              </div>
                              <div class="mv-user-review-item">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava1.jpg" alt="">
                                    <div>
                                       <a href="{{url('review/1')}}">
                                          <h3>Best Marvel movie in my opinion</h3>
                                       </a>
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
                                          17 {{__('message.December')}} 2016 {{__('message.by')}} <a href="#"> hawaiipierson</a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>This is by far one of my favorite movies from the MCU. The introduction of new Characters both good and bad also makes the movie more exciting. giving the characters more of a back story can also help audiences relate more to different characters better, and it connects a bond between the audience and actors or characters. Having seen the movie three times does not bother me here as it is as thrilling and exciting every time I am watching it. In other words, the movie is by far better than previous movies (and I do love everything Marvel), the plotting is splendid (they really do out do themselves in each film, there are no problems watching it more than once.</p>
                                 <a href="{{url('review/1/edit')}}">
                                    <h3>Edit</h3>
                                 </a>
                              </div>
                              <div class="mv-user-review-item">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava2.jpg" alt="">
                                    <div>
                                       <h3>Just about as good as the first one!</h3>
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
                                          <i class="ion-android-star"></i>
                                       </div>
                                       <p class="time">
                                          17 {{__('message.December')}} 2016 {{__('message.by')}} <a href="#"> hawaiipierson</a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>Avengers Age of Ultron is an excellent sequel and a worthy MCU title! There are a lot of good and one thing that feels off in my opinion. </p>
                                 <p>THE GOOD:</p>
                                 <p>First off the action in this movie is amazing, to buildings crumbling, to evil blue eyed robots tearing stuff up, this movie has the action perfectly handled. And with that action comes visuals. The visuals are really good, even though you can see clearly where they are through the movie, but that doesn't detract from the experience. While all the CGI glory is taking place, there are lovable characters that are in the mix. First off the original characters, Iron Man, Captain America, Thor, Hulk, Black Widow, and Hawkeye, are just as brilliant as they are always. And Joss Whedon fixed my main problem in the first Avengers by putting in more Hawkeye and him more fleshed out. Then there is the new Avengers, Quicksilver, Scarletwich, and Vision, they are pretty cool in my opinion. Vision in particular is pretty amazing in all his scenes.</p>
                                 <p>THE BAD:</p>
                                 <p>The beginning of the film it's fine until towards the second act and there is when it starts to feel a little rushed. Also I do feel like there are scenes missing but there was talk of an extended version on Blu-Ray so that's cool.</p>
                              </div>
                              <div class="mv-user-review-item">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava3.jpg" alt="">
                                    <div>
                                       <h3>One of the most boring exepirences from watching a movie</h3>
                                       <div class="no-star">
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                       </div>
                                       <p class="time">
                                          26 {{__('message.March')}} 2017 {{__('message.by')}}<a href="#"> christopherfreeman</a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>I can't right much... it's just so forgettable...Okay, from what I remember, I remember just sitting down on my seat and waiting for the movie to begin. 5 minutes into the movie, boring scene of Tony Stark just talking to his "dead" friends saying it's his fault. 10 minutes in: Boring scene of Ultron and Jarvis having robot space battles(I dunno:/). 15 minutes in: I leave the theatre.2nd attempt at watching it: I fall asleep. What woke me up is the next movie on Netflix when the movie was over.</p>
                                 <p>Bottemline: It's boring...</p>
                                 <p>10/10 because I'm a Marvel Fanboy</p>
                              </div>
                              <div class="mv-user-review-item ">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava4.jpg" alt="">
                                    <div>
                                       <h3>That spirit of fun</h3>
                                       <div class="no-star">
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                       </div>
                                       <p class="time">
                                          26 {{__('message.March')}} 2017 {{__('message.by')}} <a href="#"> juliawest</a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>If there were not an audience for Marvel comic heroes than clearly these films would not be made, to answer one other reviewer although I sympathize with him somewhat. The world is indeed an infinitely more complex place than the world of Marvel comics with clearly identifiable heroes and villains. But I get the feeling that from Robert Downey, Jr. on down the organizer and prime mover as Iron Man behind the Avengers these players do love doing these roles because it's a lot of fun. If they didn't show that spirit of fun to the audience than these films would never be made.</p>
                                 <p>So in that spirit of fun Avengers: Age Of Ultron comes before us and everyone looks like they're having a good time saving the world. A computer program got loose and took form in this dimension named Ultron and James Spader who is completely unrecognizable is running amuck in the earth. No doubt Star Trek fans took notice that this guy's mission is to cleanse the earth much like that old earth probe NOMAD which got its programming mixed up in that classic Star Trek prime story. Wouldst Captain James T. Kirk of the Enterprise had a crew like Downey has at his command.</p>
                                 <p>My favorite is always Chris Evans because of the whole cast he best gets into the spirit of being a superhero. Of all of them, he's already played two superheroes, Captain America and Johnny Storm the Human Torch. I'll be before he's done Evans will play a couple of more as long as the money's good and he enjoys it.</p>
                                 <p>Pretend you're a kid again and enjoy, don't take it so seriously.</p>
                              </div>
                              <div class="mv-user-review-item last">
                                 <div class="user-infor">
                                    <img src="images/uploads/userava5.jpg" alt="">
                                    <div>
                                       <h3>Impressive Special Effects and Cast</h3>
                                       <div class="no-star">
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star"></i>
                                          <i class="ion-android-star last"></i>
                                          <i class="ion-android-star last"></i>
                                       </div>
                                       <p class="time">
                                          26 {{__('message.March')}} 2017 {{__('message.by')}} <a href="#"> johnnylee</a>
                                       </p>
                                    </div>
                                 </div>
                                 <p>The Avengers raid a Hydra base in Sokovia commanded by Strucker and they retrieve Loki's scepter. They also discover that Strucker had been conducting experiments with the orphan twins Pietro Maximoff (Aaron Taylor-Johnson), who has super speed, and Wanda Maximoff (Elizabeth Olsen), who can control minds and project energy. Tony Stark (Robert Downey Jr.) discovers an Artificial Intelligence in the scepter and convinces Bruce Banner (Mark Ruffalo) to secretly help him to transfer the A.I. to his Ultron defense system. However, the Ultron understands that is necessary to annihilate mankind to save the planet, attacks the Avengers and flees to Sokovia with the scepter. He builds an armature for self-protection and robots for his army and teams up with the twins. The Avengers go to Clinton Barton's house to recover, but out of the blue, Nick Fury (Samuel L. Jackson) arrives and convinces them to fight against Ultron. Will they succeed? </p>
                                 <p>"Avengers: Age of Ultron" is an entertaining adventure with impressive special effects and cast. The storyline might be better, since most of the characters do not show any chemistry. However, it is worthwhile watching this film since the amazing special effects are not possible to be described in words. Why Pietro has to die is also not possible to be explained. My vote is eight.</p>
                              </div>
                              <div class="topbar-filter">
                                 <label>{{__('message.Related_Book')}}:</label>
                                 <select>
                                    <option value="range">5 {{__('message.Reviews')}}</option>
                                    <option value="saab">10 {{__('message.Reviews')}}</option>
                                 </select>
                                 <div class="pagination2">
                                    <span>{{__('message.pages')}} 1 {{__('message.of')}} 6:</span>
                                    <a class="active" href="#">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#">6</a>
                                    <a href="#"><i class="ion-arrow-right-b"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="moviesrelated" class="tab">
                           <div class="row">
                              <h3>{{__('message.Related_Book')}}</h3>
                              <h2>Skyfall: Quantum of Spectre</h2>
                              <div class="topbar-filter">
                                 <p>{{__('message.Found')}} <span>12 {{__('message.Books')}}</span> {{__('message.in_total')}}</p>
                              </div>
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
                                    <a href="#"><i class="ion-arrow-right-b"></i></a>
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