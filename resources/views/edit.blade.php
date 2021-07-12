@extends('layout')

@section('content') 

<div>
<h1>Edit Restaurant</h1>
<form class=col-sm-6 method='post' action="{{url('/edit')}}">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="hidden" class="form-control" name="id" value="{{$data->id}}">

    <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" value="{{$data->email}}" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" value="{{$data->address}}"  placeholder="Enter Address">
  </div>


  <button type="submit" class="btn btn-primary">Edit Restaurant</button>
</form>
</div>
@stop