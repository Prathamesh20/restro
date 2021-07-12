@extends('layout')

@section('content')

<div>
<h1>User Registration</h1>
<form class=col-sm-6 method='post' action="{{url('/register')}}">
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
    <label>Contact</label>
    <input type="text" class="form-control" name="contact" placeholder="Enter Contact">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password">
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop