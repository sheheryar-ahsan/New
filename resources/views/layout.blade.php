<!DOCTYPE html>
<html>
<head>
	<title>Dot Gameware- @yield('title')</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.bg{
	height: 100vh;
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(836945.jpg);
	background-position: center;
	background-size: cover;	
	overflow-x: hidden;
	position: relative;
}
</style>
</head>
<body>
	
		@section('navbar')

		<nav class="navbar navbar-expand-sm bg-dark">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a id="index" class="navbar-brand" href="{{url('welcome')}}" > Welcome </a>
				</li>
				<li class="nav-item">
					<a id="index" class="navbar-brand" href="{{url('form')}}" > Form </a>
				</li>
				<li class="nav-item" >
					<a id="index"	class="navbar-brand" href="{{url('Lab')}}" > Lab </a>
				 </li>
				 




			</ul>

		</nav>

		@show
		<div class="bg">
</div>
</body>
</html>