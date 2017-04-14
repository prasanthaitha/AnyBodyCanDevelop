<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form action="/order" method="post">
  <ul>
@foreach($foo as $foo1)
<li>
<input type="checkbox" name="dish" value={{$foo1->dish_name}}>{{$foo1->dish_name}}</input>
{{$foo1->price}}</li>
<input type="integer"  name="q{{$foo1->dish_name}}">
@endforeach
<input type="submit" name="submit" value="Submit"/>
</ul>
</form>


</body>
</html>