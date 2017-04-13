<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>
@foreach($sta as $sta1)
  <li><a href="/rest/{{$sta1->rest_id}}">{{$sta1->rest_name}}</a>
</li>@endforeach
</ul>


</body>
</html>