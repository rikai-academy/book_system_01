@extends('users.layouts.index')
@section('content')
@include('users.title.review.header')
<h1> {{__('message.Show_Review')}}</h1>
@include('users.title.body')
<li> <span class="ion-ios-arrow-right"></span> {{__('message.Show_Review')}}</li>
@include('users.title.footer')
<div class="page-single">
   <div class="container">
      <div class="row ipad-width">
         <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12">
               <div class="blog-detail-ct">
                  <h1>New Character Posters For Pirates Of The Caribbean</h1>
                  <span class="time">27 {{__('message.Mar')}} 2017</span>
                  <p>
                     Joss Whedon has a little bit of a history with superhero movies, and for creating layered female characters. After his documented frustrations with Wonder Woman, he's getting another chance at the DC Extended Universe and Warner Bros., closing in on a deal to write direct and produce a Batgirl movie.
                  </p>
                  <p>It's a somewhat surprising, but welcome move, given that Whedon has taken a long break to write something original, but has now pivoted to focus on developing the Batgirl project. First appearing in 1967 in Gardner Fox and Carmine Infantino's story run The Million Dollar Debut Of Batgirl, she's the superhero alias of Barbara Gordon, daughter of Gotham City Police Commissioner James Gordon. So we can likely expect J.K. Simmons' take on Gordon to appear along with other Bat-related characters.</p>
                  <p>Based on Lissa Evans’ novel “Their Finest Hour and a Half” and directed by Lone Scherfig (“An Education”), the film is set in London during World War II when the British ministry was utilizing propaganda films to boost morale. Arterton plays Catrin Cole, a scriptwriter who is brought on to handle the women’s dialogue — commonly referred to as “the nausea.” The film, opening this week, features an outstanding ensemble, including Bill Nighy as a washed-up actor and Sam Claflin as Catrin’s fellow writer and sparring partner.</p>
                  <div class="flex-it flex-ct">
                     <p>
                        Arterton is next set to play Vita Sackville-West in Vita and Virginia about her relationship with Virginia Woolf. She spoke to Variety about working with female directors, remarkable women, and why she shies away from the
                        term “strong female character.” <br>
                        I’m friends with the producer who I worked with on Byzantium and he sent it to me. I read the book as well, which is fantastic. You’re always looking for untold stories and many times they’re women’s stories. What surprised me is that it centers around a woman who’s really quite timid. I guess she’s allowed to be because all of the other characters.
                     </p>
                     <!--<img src="images/uploads/blog-detail2.jpg" alt="">-->
                  </div>
                  <p>Man Down debuted simultaneously on digital platforms in the U.K., meaning it was never going to be a big earner in theaters. But no one expected only one ticket sale. As of Tuesday, the Reel Cinema in Burnley was still carrying Man Down, which also stars Gary Oldman, Jai Courtney and Kate Mara.</p>
                  <p>In the film, LaBeouf stars as a war veteran suffering from PTSD following his return from Afghanistan. The indie project, reuniting the star with A Guide to Recognizing Your Saints director Dito Montile, made its world premiere at the 2016 Venice Film Festival before making making a stop at the Toronto International Film Festival.</p>
                  <!-- share link -->
                  <div class="flex-it share-tag">
                     <div class="social-link">
                        <h4>{{__('message.Share_it')}}</h4>
                        <a href="#"><i class="ion-social-facebook"></i></a>
                        <a href="#"><i class="ion-social-twitter"></i></a>
                        <a href="#"><i class="ion-social-googleplus"></i></a>
                        <a href="#"><i class="ion-social-pinterest"></i></a>
                        <a href="#"><i class="ion-social-linkedin"></i></a>
                     </div>
                     <div class="right-it">
                        <h4>{{__('message.Tags')}}</h4>
                        <a href="#">{{__('message.Gray')}},</a>
                        <a href="#">{{__('message.Film')}},</a>
                        <a href="#">{{__('message.Poster')}}</a>
                     </div>
                  </div>
                  <!-- comment items -->
                  <div class="comments">
                     <h4>04 {{__('message.Comments')}}</h4>
                     <div class="cmt-item flex-it">
                        <img src="images/uploads/author.png" alt="">
                        <div class="author-infor">
                           <div class="flex-it2">
                              <h6><a href="#">Steve Perry</a></h6>
                              <span class="time"> - 27 {{__('message.Mar')}} 2017</span>
                           </div>
                           <p>Even though Journey's classic vocalist Steve Perry didn’t reunite with the band during their Rock Hall performance (to the dismay of hopeful fans), he did offer up a touching speech.</p>
                           <div>
                              <p>
                                 <a class="rep-btn" href="{{url('comment/1/edit')}}">{{__('message.Edit')}}</a>
                                 <a class="rep-btn" href="#">{{__('message.Delete')}}</a>
                              </p>
                           </div>
                        </div>
                     </div>
                     <div class="cmt-item flex-it">
                        <img src="images/uploads/author4.png" alt="">
                        <div class="author-infor">
                           <div class="flex-it2">
                              <h6><a href="#">Margot Robbie</a></h6>
                              <span class="time"> - 27 {{__('message.Mar')}} 2017</span>
                           </div>
                           <p>Joan Baez was the sharpest of the Rock Hall inductees, singing about deportees and talking social activism as well as joking about her age and the likelihood that a good portion of the Barclays. </p>
                           <div>
                              <p>
                                 <a class="rep-btn" href="{{url('comment/1/edit')}}">{{__('message.Edit')}}</a>
                                 <a class="rep-btn" href="#">{{__('message.Delete')}}</a>
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="comment-form">
                     <h4>{{__('message.Leave_a_comment')}}</h4>
                     <form action="#">
                        <div class="row">
                           <div class="col-md-8">
                              <input type="text" placeholder="{{__('message.Title')}}">
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <textarea name="message" id="" placeholder="{{__('message.Comments')}}"></textarea>
                           </div>
                        </div>
                        <input class="submit" type="submit" value="{{__('message.save')}}">
                     </form>
                  </div>
                  <!-- comment form -->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection