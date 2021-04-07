<!DOCTYPE html>
<html>
<head>
    @yield('head')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<nav>
	@yield('nav')
</nav>	
  
<div class="container">
    @yield('content')
</div>
 <footer>
 	@yield('footer')
 </footer>  
</body>
</html>