@extends('layouts.app2')

@section('body')
	<br>
	<a href="/toedit" class="btn btn-info">Back</a>
	
	<div class="clo-lg-4 clo-lg-offset-4">
		<p>Restaurant Name:{{$item[0]->rest_name}}
		<p>Station Name:{{$item[0]->stn_name}}</p>
		<p>Email:{{$item[0]->email}}</p>
		<p>Status:{{$item[0]->status}}</p>
	</div>
@endsection