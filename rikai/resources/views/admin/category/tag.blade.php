@extends('admin.layout.index')
@section('content1')
@if(Auth::user()->roles()->value('name') === 'admin')
<div class="row">
   <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title">{{__('message.Tags')}}</h4>
            <label for="cart-status">{{ __('message.Time') }}</label>
          <select name="status" id="tag-status">
            <option value="week" {{ $date =='week'?'selected':'' }}>{{ __('message.weeks') }}</option>
            <option value="month" {{ $date =='month'?'selected':'' }}>{{ __('message.month') }}</option>
          </select>
            <p class="card-description">
            </p>
            <div class="table-responsive">
               <table class="table">
                  <thead>
                     <tr>
                        <th>{{__('message.Id')}}</th>
                        <th>{{__('message.Title')}}</th>
                        <th>{{__('message.Count')}}</th>
                        <th>{{__('message.Action')}}</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($tags as $tag)
                     <tr>
                        <td>{{$tag->tag_id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{countTag($tag->tag_id)}}</td>
                        <td>
                           <a href="{{route('tag.edit',[$tag->tag_id])}}">
                           <label class="badge badge-info">{{__('message.Edit')}}</label>
                           </a>
                           <a class="confirm" item-id="{{ $tag->tag_id }}" item-type="tag" lang="{{ session('language') }}">
                           <label class="badge badge-danger">{{__('message.Delete')}}</label>
                           </a>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               <div class="topbar-filter">
               {{$tags->links("pagination::bootstrap-4")}}
            </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endif
@endsection