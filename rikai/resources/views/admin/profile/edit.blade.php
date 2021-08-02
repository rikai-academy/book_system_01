@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Users')}}</h4>
            <p class="card-description">
               {{__('message.Users')}}
            </p>
            <form class="forms-sample">
               <div class="form-group">
                  <label for="exampleInputName1">{{__('message.Username')}}</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="{{__('message.Username')}}">
               </div>
               <div class="form-group">
                  <label for="exampleInputEmail3">{{__('message.Email_Address')}}</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" placeholder="{{__('message.Email_Address')}}">
               </div>
               <div class="form-group">
                  <label for="exampleInputPassword4">{{__('message.Password')}}</label>
                  <input type="password" class="form-control" id="exampleInputPassword4" placeholder="{{__('message.Password')}}">
               </div>
               <div class="form-group">
                  <label>{{__('message.Image_Profile')}}</label>
                  <img src="https://picsum.photos/200" alt="Italian Trulli">
               </div>
               <div class="form-group">
                  <label>{{__('message.Upload')}} {{__('message.Image')}}</label>
                  <input type="file" name="img[]" class="file-upload-default">
                  <div class="input-group col-xs-12">
                     <input type="text" class="form-control file-upload-info" disabled placeholder="{{__('message.Upload')}} {{__('message.Image')}}">
                     <span class="input-group-append">
                     <button class="file-upload-browse btn btn-primary" type="button">{{__('message.Upload')}}</button>
                     </span>
                  </div>
               </div>
               <button type="submit" class="btn btn-primary mr-2">{{__('message.submit')}}</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection