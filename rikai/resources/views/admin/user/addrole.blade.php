@extends('admin.layout.index')
@section('content1')
@if(Auth::user()->roles()->value('name') === 'admin')
<div class="container">
<form action="{{route('role.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="row justify-content-center">
        <div class="col-md-6">
         @csrf
            <div class="card">
                <div class="card-header">{{__('message.Role')}}</div>
                <div class="card-body">
                  <select name="role_id" id="role" class="form-control">
                    @foreach($roles as $role)
                        <option 
                        @if($role->id == $roler->id)
                        {{"selected"}}
                        @endif
                        value="{{$role->id}}">{{$role->name}}</option>
                    @endforeach
                   </select>
                </div>
                <div class="card-footer"><input type="submit" class="btn btn-success" name="add_role" value="{{__('message.Add_Role')}}"/></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{__('message.Permissions')}}</div>
                <div class="card-body">
                   <ul>
                    @foreach($permissions as $permission)
                        <li><input
                        @foreach($permis as $permi)
                         @if ($permission->id == $permi->id) checked="checked" @endif @endforeach type="checkbox" name="permissions[]" value="{{$permission->id}}">
                         {{__('message.'.$permission->name)}}</li>
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