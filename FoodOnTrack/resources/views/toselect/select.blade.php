@extends('layouts.app2')

@section('body')
	<br>
	<a href="/home" class="btn btn-info">Back to Home</a>
	<div class="clo-lg-4 clo-lg-offset-4">
		<center><h1>Users</h1></center>

		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Select</th>
		      <th>Dish Name</th>
		      <th>Price</th>
		    </tr>
		  </thead>
		  <form action="/toselect" method="POST">
		  	<tbody>
		  	<?php
			  	foreach($dishes as $dish){
			  		foreach($contains as $contain){
						    echo '<tr class="active">';
						    	if({{$dish->dish_id}} == {{$contain->$dish_id}}){
							     echo  '<td><input type="checkbox" name="{{$dish->dish_id}}" value="" checked="checked"></td>
							      <td>{{$dish->dish_name}}</td>
							      <td><input type="text" name="-{{$dish->dish_id}}" value="{{$contain->price}}"></td>';
							     }
							    else{
							     echo   '<td><input type="checkbox" name="{{$dish->dish_id}}" value=""></td>
							      <td>{{$dish->dish_name}}</td>
							      <td><input type="text" name="-{{$dish->dish_id}}" value="0"></td>';
							     }
							    // @endif
						    echo '</tr>';
					}
				}
				//   @endforeach
				// @endforeach
			?>
			  </tbody>
		  </form>
			  
		  
		</table> 
	</div>
@endsection