<!--end of preloading-->
@include('users.layouts.login')
@include('users.layouts.register')
<!-- BEGIN | Header -->
<header class="ht-header">
   <div class="container">
      @include('users.layouts.menu')
      <!-- top search form -->
      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
      @endif
      @if (Session::has('message'))
      <div class="flash alert-info">
         <p class="panel-body">
            {{ __(Session::get('message')) }}
         </p>
      </div>
      @endif
      <form method="get" id="searchForm" action="{{route('search')}}">
         <div class="top-search">
            <select>
               <option value="united">{{__('message.Novel')}}</option>
               <option value="saab">{{__('message.Others')}}</option>
            </select>
            <input type="text" name="body" placeholder="{{__('message.Search_for_a_book')}}">
            <button class="btn-search">Search</button>
         </div>
      </form>
   </div>
   <base href="{{asset('')}}">
   <link rel="stylesheet" href="css/plugins.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/custom.css">
</header>