@extends('layout/layout')
@section('content')
<div class="col-md-3 col-lg-3 col-xl-3 col-sm-3">
@if(Session::get('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>




</div>
@endif


@endsection