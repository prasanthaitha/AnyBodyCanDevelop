<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<li>
    <a href="{{ url('/login') }}" class="waves-effect waves-light btn">Login</a>
</li>
<li>
	<a href="{{ url('/register') }}" class="waves-effect waves-light btn">Register</a>
</li>

<form action ="/search" method="get"> 
<input type="text" name="searchtr">
<input type="submit" value="submit">
</form>



</body>
</html>