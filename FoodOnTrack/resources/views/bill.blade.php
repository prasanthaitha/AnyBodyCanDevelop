<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

  @for($i=1;$i<20;$i=$i+1)
{{$q[$i]}}
{{$r[$i]}}
@endfor
<br>
Total=>{{$sum}}

<input type="text" nae="cust_name">
<input type="text" name="c_mail">
<input type="integer" name="c_mobile">







</body>
</html>