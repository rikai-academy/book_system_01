@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Sale_Book')}}</h4>
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>{{__('message.Name_Book')}}</th>
                        <th>{{__('message.Quantity')}}</th>
                        <th>{{__('message.price')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>53275531</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="col-md-6 grid-margin stretch-card">
   <div class="card">
      <div class="card-body">
         <h4 class="card-title">{{__('message.Checkout')}}</h4>
         <div class="form-group row">
            <div class="col">
               <label>{{__('message.Total')}}</label>
            </div>
            <div class="col">
               <label>$1321313 vnd</label>
            </div>
            <div class="col">
               <div id="bloodhound">
                  <button type="submit" class="btn btn-primary mr-2">{{__('message.Confirm')}}</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection