<!--end of preloading-->
@include('users.layouts.login')
@include('users.layouts.register')
<!-- BEGIN | Header -->
<header class="ht-header">
   <div class="container">
      @include('users.layouts.menu')
      <!-- top search form -->
      <div class="top-search">
         <select>
            <option value="united">{{__('message.Novel')}}</option>
            <option value="saab">{{__('message.Others')}}</option>
         </select>
         <input type="text" placeholder="{{__('message.Search_for_a_book')}}">
      </div>
   </div>
   <base href="{{asset('')}}">
   <link rel="stylesheet" href="css/plugins.css">
   <link rel="stylesheet" href="css/style.css">
</header>