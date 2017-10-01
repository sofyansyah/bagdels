@extends('layouts.master')

@section('content')

<div class="container">
	<form action= "{{url('team/'.$teams->id.'/post-edit')}}" method="POST">
		{{csrf_field()}}
		<div class="col-md-12">


			<div class="form-group">
				<input type="file" name="logo" class="form-control" placeholder="Image">
			</div>
			<div class="form-group">
				<input type="text" name="member" class="form-control" value="{{$teams->member}}">
			</div>

			<div class="form-group">
				<input type="file" name="background_banner" value="{{$teams->background_banner}}" class="form-control" >
			</div>

		</div>
		<div class="col-md-12">
			<button class="btn btn-info" type="submit">Update</button>
		</div>
	</form>
</div>

@endsection