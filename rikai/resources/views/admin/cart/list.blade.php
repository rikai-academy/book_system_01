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
                        <th>{{__('message.Id')}}</th>
                        <th>{{__('message.Username')}}</th>
                        <th>{{__('message.Total')}}</th>
                        <th>{{__('message.Created_At')}}</th>
                        <th>{{__('message.Action')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>53275531</td>
                        <td>53275531</td>
                        <td>
                           <a href="{{route('cart.edit',[1])}}">
                           <label class="badge badge-info">{{__('message.Detail')}}</label>
                           </a>
                           <a href="{{url('admin/cart/1')}}">
                           <label class="badge badge-danger">{{__('message.Deny')}}</label>
                           </a>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection