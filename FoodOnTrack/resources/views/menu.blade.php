<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

@if($a==0)
<form action="/order" method="post">
{{csrf_field()}}

<ul>
@foreach($foo as $foo1)
<li>
{{$foo1->dish_name}}
{{$foo1->price}}
</li>
<input type="integer" name="{{$foo1->dish_id}}"  value=0>
<input type="hidden" name="+{{$foo1->dish_id}}"  value="{{$foo1->dish_id}}">
<input type="hidden" name="-{{$foo1->dish_id}}" value="{{$foo1->price}}">
@endforeach
<input type="hidden" name="rest" value="{{$foo[0]->rest_id}}">
<input type="submit" name="submit" value="submit">
</ul>
</form>
@endif


@if($a==1)

Total=>{{$sum}}
<br>
Customer details:
<br>

	<form action="/booking" method="post">
		{{csrf_field()}}
      
      
		<input type="hidden" name="sum" value="{{$sum}}">
		<input type="text" nane="cust_name" >
		<input type="text" name="c_mail" >
		<input type="integer" name="c_mobile" >
				<input type="integer" name="pnr" >

		<input type="text" nane="coach_no" >
		<input type="integer" name="seat_no" >
		<input type="submit" name="submit" value="submit">
	</form >

@endif


</body>
</html>