@extends('layouts.app2')

@section('body')
	<br>
	<a href="/admin/home" class="btn btn-info">Back to Home</a>
	<div class="clo-lg-4 clo-lg-offset-4">
		<center><h1>Users</h1></center>

		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>User id</th>
		      <th>Restaurant Name</th>
		      <th>Station Name</th>
		      <th>Status</th>
		      <th>email id</th>
		      <th>Registered at</th>
		    </tr>
		  </thead>
		  @foreach($users as $user)
		  		<tbody>
		  				<?php if(($user->status)==0)
		  		          	$r='Not Joined';
		  		         	else
		  		         	$r='Joined';
                   		?>
				    <tr class="active">
				      <td>{{$user->id}}</td>
				      <td>{{$user->rest_name}}</td>
				      <td>{{$user->stn_name}}</td>
				      <td>{{$r}}</td>
				      <td><a href="{{'/toedit/'.$user->id}}">{{$user->email}}</a></td>
				      <span><td>{{$user->created_at}}</td></span>
				      <td><a href="{{'/toedit/'.$user->id.'/edit'}}">Edit Status</a></td>
				    </tr>
			    </tbody>
		  @endforeach
		  
		</table> 
	</div>
@endsection