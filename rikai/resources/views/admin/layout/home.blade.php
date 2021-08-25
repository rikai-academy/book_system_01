@extends('admin.layout.index')
@section('content1')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">       
        <div style="height: 300px;width:100%">
          {!! $chart["cart"]->container() !!}
        </div>      
        <div style="height: 300px;width:100%">
          {!! $chart["revenue"]->container() !!}
        </div> 
      </div>
    </div>
  </div>
</div>
@endsection

@section('js')
<script src="{{ asset('/admin/js/Chart.min.js') }}" charset="utf-8"></script>
{!! $chart["cart"]->script() !!}
{!! $chart["revenue"]->script() !!}
@endsection