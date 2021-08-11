<!DOCTYPE html>
<html lang="en">
   <head>
      @include('admin.config.headerloginjs')
   </head>
   <body>
      <div class="container-scroller">
         <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
               <div class="row w-100 mx-0">
                  <div class="col-lg-4 mx-auto">
                     <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                           <img src="{{ asset('admin/images/logo.svg') }}" alt="logo">
                        </div>
                        <h4>{{__('message.Hello')}}</h4>
                        <h6 class="font-weight-light">{{__('message.LOG_In')}} {{__('message.to_continue')}}.</h6>
                        <form class="pt-3">
                           <div class="form-group">
                              <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="{{__('message.Email_Address')}}">
                           </div>
                           <div class="form-group">
                              <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="{{__('message.Password')}}">
                           </div>
                           <div class="mt-3">
                              <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">{{__('message.LOG_In')}}</a>
                           </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.config.footerloginjs')
      <!-- endinject -->
      <!-- Plugin js for this page -->
      <!-- End plugin js for this page -->
      <!-- inject:js -->
      <!-- endinject -->
   </body>
</html>