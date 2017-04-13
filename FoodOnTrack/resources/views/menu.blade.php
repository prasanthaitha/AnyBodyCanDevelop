<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  <ul>
@foreach($foo as $foo1)
<li>
{{$foo1->dish_name}}
{{$foo1->price}}</li>
@endforeach
</ul>



</body>
</html>