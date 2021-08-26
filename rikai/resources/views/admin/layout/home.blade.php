@extends('admin.layout.index')
@section('content1')
<div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
     <div class="card">
       <div class="card-body">
         <h4 class="card-title display-inline-block">{{__('message.List_User')}}</h4>
         <form class="display-inline-block float-right" method="POST" action="{{ route('admin.user.search') }}">
           @csrf
           <label for="search">{{ __('message.search') }}</label>
           <input type="text" name="search" id="search" class="custom-input">
           <select name="by" id="search-by">
             <option value="id" >{{__('message.Id')}}</option>
             <option value="name">{{__('message.Username')}}</option>
             <option value="email">{{__('message.Email')}}</option>
           </select>
           <button type="submit" class="display-hidden"></button>
         </form>
         <div class="table-responsive">
           <table class="table">
             <thead>
               <tr>
                 <th>{{__('message.Id')}}</th>
                 <th>{{__('message.Username')}}</th>
                 <th>{{__('message.Image')}}</th>
                 <th>{{__('message.Email')}}</th>
                 @if(Auth::user()->roles()->value('name') === 'admin')
                 <th>{{__('message.Action')}}</th>
                 @endif
               </tr>
             </thead>
             @foreach ($data["users"] as $user)
             <tbody>
               <tr>
                 <td>{{ $user->id }}</td>
                 <td>{{ $user->name }}</td>
                 <td><img src="{{ imgSrc($user->image) }}" alt=""></td>
                 <td>{{ $user->email }}</td>
                 @if(Auth::user()->roles()->value('name') === 'admin')
                 <td>
                   <a href="{{url('admin/user/'.$user->id.'/edit')}}">
                     <label class="badge badge-info">{{__('message.Edit')}}</label>
                   </a>
                   <a>
                     <label for="{{ "submit-delete-".$user->id }}" class="badge badge-danger">{{__('message.Delete')}}</label>
                     <input type="submit" class="display-hidden" form="{{ "delete-".$user->id }}" id="{{ "submit-delete-".$user->id }}" {{ $user->role == "admin"?"disabled":"" }} />
                     <form action="{{ url('admin/user/'.$user->id ) }}" method="post" id="{{ "delete-".$user->id }}">
                       @csrf
                       @method('DELETE')
                     </form>
                   </a>
                 </td>
                 @endif
               </tr>
             </tbody>
             @endforeach
           </table>
         </div>
         {{ $data["users"]->links("pagination::bootstrap-4") }}
       </div>
     </div>
   </div>
 </div>
@endsection