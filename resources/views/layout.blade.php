<html>
<title>
Restaurant App
</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<body>
<header style="background-color:#686868;" >
<nav class="navbar navbar-expand-lg navbar-light " >
  <a class="navbar-brand" href="#">Restaurant</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse"  id="navbarNavAltMarkup">
    <div class="navbar-nav" >
      <a class="nav-item nav-link text-white active " href="home">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link text-white" href="list">List</a>
      <a class="nav-item nav-link text-white" href="add">Add</a>
     
      @if(Session::get('user'))
      <a class="nav-item nav-link text-white" href="#">Welcome {{Session::get('user')}}</a>
      <a class="nav-item nav-link text-white" href="logout">logout </a>
      @else
      <a class="nav-item nav-link text-white" href="login">Login</a>
      <a class="nav-item nav-link text-white" href="register">Register</a>
      @endif


    </div>
  </div>
</nav>
</header>
<div class="container">
@yield('content')

</div>
<footer>
<!--footer is here -->
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: grey;
  color: black;
  text-align: center;
}
</style>

<div class="footer">
  <p>@copyright{{date("Y")}}</p>
</div>
</footer>
</body>
</html>
