@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Books')}}</h4>
            <p class="card-description">
            </p>
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>{{__('message.Id')}}</th>
                        <th>{{__('message.Title')}}</th>
                        <th>{{__('message.Author')}}</th>
                        <th>{{__('message.Image')}}</th>
                        <th>{{__('message.Quantity')}}</th>
                        <th>{{__('message.price')}}</th>
                        <th>{{__('message.Action')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>12 May 2017</td>
                        <td>12 May 2017</td>
                        <td>12 May 2017</td>
                        <td>12 May 2017</td>
                        <td>
                           <a href="{{route('bookadmin.edit',[1])}}">
                           <label class="badge badge-info">{{__('message.Edit')}}</label>
                           </a>
                           <a>
                           <label class="badge badge-danger">{{__('message.Delete')}}</label>
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