@extends('layout.master')
@section('content')
<div class="container mt-4">
<div class="row mb-4" >
<a class="btn btn-success" href="{{url('/create_shop')}}">Add Shops</a>
</div>
  <div class="row justify-content-md-center">
<!-- <div class="row"> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
    </tr>
  </thead>
  <tbody>
  @foreach($shops as $type)
    <tr>
    <td>{{ $type->id }}</td>
    <td>{{ $type->shop_name }}</td>
</tr>
    @endforeach
@stop
  </tbody>
</table>
</div>
</div>


