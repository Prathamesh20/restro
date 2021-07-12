@extends('layout')

@section('content')

<div>
<h1>Add New Restaurant</h1>
<form class=col-sm-6 method='post' action="{{url('/add')}}">
@csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" name="address" placeholder="Enter Address">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop