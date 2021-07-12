@extends('layout')

@section('content')

<div>
<h1>User Login</h1>
<form class=col-sm-6 method='post' action="{{url('/login')}}">
@csrf
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" required>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@if(Session::get('log'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Wrong email id or password!</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
@stop