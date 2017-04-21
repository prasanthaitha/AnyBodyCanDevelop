@extends('layouts.app2')

@section('body')
	<br>
	<a href="/toedit" class="btn btn-info">Back</a>
	<div class="clo-lg-4 clo-lg-offset-4">
			<h1>Edit User Status</h1>
			<form class="form-horizontal" method="post" action="/toedit/@yield('editId')">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<fieldset>
					<div class="form-group">
				      <label for="status" class="col-lg-2 control-label">Status</label>
				      <div class="col-lg-10">
				        <input type="integer" class="form-control" name="status" value="@yield('editStatus')">
				      </div>
				      <br> <br> <br> <br>

				          <div  class="col-m-4 col-md-offset-2" style="">
		                     Note: Update Status '0' for rejecting.<br>
		                           Update Status '1' for accepting.
		                     
		                           <br> 
		                    </div>   

                         <br>
				      <div class="col-lg-10 col-lg-offset-2">
				      	<button type="submit" class="btn btn-success">Submit</button>

				      </div>
				    </div>
				 </fieldset>
			</form>
	</div>


@endsection

