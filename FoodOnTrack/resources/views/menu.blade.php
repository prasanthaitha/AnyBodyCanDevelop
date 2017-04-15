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
{{$foo1->price}}</li>
<input type="integer" name="{{$foo1->dish_id}}" >
<input type="hidden" name="-{{$foo1->dish_id}}" value="{{$foo1->price}}">
@endforeach
<input type="hidden" name="rest" value="{{$foo[0]->rest_id}}"
<input type="submit" name="submit" value="submit"/>
</ul>
</form>
@endif

@if($a==1)
 @for($i=1;$i<20;$i=$i+1)

{{$q[$i]}}
{{$r[$i]}}
@endfor
<br>
Total=>{{$sum}}
<br>
Customer details:
<br>
<form action="/booking" method="post">
{{csrf_field()}}

<input type="text" nane="cust_name" />
<input type="text" name="c_mail" />
<input type="integer" name="c_mobile" />
<input type="integer" name="pnr" />
<input type="string" name="caoch_no" />
<input type="integer" name="seat_no" />
<input type=""
</form>

@endif

<!--  -->
</body>
</html>