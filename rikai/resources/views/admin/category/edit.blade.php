@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Edit_Category')}}</h4>
            <p class="card-description">
               {{__('message.Edit_Category')}}
            </p>
            <form class="forms-sample">
               <div class="form-group">
                  <label for="exampleInputName1">{{__('message.Name_Category')}}</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="{{__('message.Name_Category')}}">
               </div>
               <div class="form-group">
                  <label for="exampleTextarea1">{{__('message.Description')}}</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
               </div>
               <button type="submit" class="btn btn-primary mr-2">{{__('message.submit')}}</button>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection