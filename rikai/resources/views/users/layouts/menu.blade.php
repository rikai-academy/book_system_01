<nav class="navbar navbar-default navbar-custom">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header logo">
            <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <div id="nav-icon1">
                  <span></span>
                  <span></span>
                  <span></span>
               </div>
            </div>
            <a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
         </div>
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav flex-child-menu menu-left">
               <li class="hidden">
                  <a href="#page-top"></a>
               </li>
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown">
                  {{__('message.Home')}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{url('home')}}">{{__('message.Home')}} </a></li>
                  </ul>
               </li>
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                  {{__('message.Category_Book')}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{url('book')}}">{{__('message.Novel')}}</a></li>
                     <li><a href="{{url('book')}}">{{__('message.Science')}}</a></li>
                     <li class="it-last"><a href="{{url('book')}}">{{__('message.Manga')}}</a></li>
                  </ul>
               </li>
               @auth
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                  {{__('message.Profile',['name'=>auth()->user()->name])}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{url('profile/'.auth()->user()->id )}}">{{__('message.User_Profile')}}</a></li>
                     <li><a href="{{url('cart/1')}}">{{__('message.Cart')}}</a></li>
                  </ul>
               </li>
               @endauth
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                  {{__('message.Books')}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{url('book')}}">{{__('message.List_Book')}}</a></li>
                  </ul>
               </li>
            </ul>
            <ul class="nav navbar-nav flex-child-menu menu-right">
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                  {{__('message.pages')}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="404.html">{{__('message.404_Page')}}</a></li>
                  </ul>
               </li>
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                  {{__('message.Language')}} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{route('language.index',['en'])}}">English</a></li>
                     <li><a href="{{route('language.index',['vi'])}}">Viet Nam</a></li>
                  </ul>
               </li>
               <li><a href="#">{{__('message.Help')}}</a></li>
               @guest
               <li class="loginLink" id="loginLink"><a href="#">{{__('message.LOG_In')}}</a></li>
               <li class="btn signupLink"><a href="#">{{__('message.sign_up')}}</a></li>
               @if(Session::has('openlogin') && Session::get('openlogin') == 5)
                  <script src="js/login.js"></script>
               @endif
               @else 
               <li class="dropdown first">
                  <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                     {{ Auth::user()->name }} <i class="fa fa-angle-down" aria-hidden="true"></i>
                  </a>
                  <ul class="dropdown-menu level1">
                     <li><a href="{{route('logout')}}"onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('message.Logout') }}</a></li>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </ul>
               </li>
               @endguest
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </nav>
