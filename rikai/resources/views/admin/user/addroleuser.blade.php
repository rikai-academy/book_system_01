@extends('admin.layout.index')
@section('content1')
@if(Auth::user()->roles()->value('name') === 'admin')
<div class="container">
<form action="{{route('store.role.user')}}" method="post">
@csrf
    <div class="row justify-content-center">
        <div class="col-md-6">
         @csrf
            <div class="card">
                <div class="card-header">{{__('message.Role')}}</div>
                <div class="card-body">
                  <select name="role_id" id="roleuser" class="form-control">
                    @foreach($roles as $role)
                        <option 
                        @if($role->id == $roler->id)
                            {{"selected"}}
                        @endif
                        value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                   </select>
                </div>
                <div class="card-footer"><input type="submit" class="btn btn-success" name="add_role" value="{{__('message.Users')}}"/></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{__('message.Add_Role_Users')}}</div>
                <div class="card-body">
                   <ul>
                    @foreach($users as $user)
                        <li><input 
                        @foreach($mans as $man)
                            @if ($user->id == $man->id) checked="checked" @endif @endforeach
                        type="checkbox" name="users[]" value="{{$user->id}}">{{$user->name}}</li>
                    @endforeach
                   </ul>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
@endif
@endsection