@extends('layouts.master')

@section('content')

<div class="container">
	<form action= {{'post-edit-team'}} method="POST">
		{{csrf_field()}}
		<div class="col-md-12">
			<div class="form-group">
				<input type="text" name="title" value="{{$team->title}}" class="form-control" >
			</div>

			<div class="form-group">
				<input type="text" name="description" value="{{$team->description}}" class="form-control" >
			</div>

			<div class="form-group">
				<input type="file" name="banner" class="form-control" >
			</div>

		</div>
		<div class="col-md-12">
			<button class="btn btn-info" type="submit">Edit</button>
		</div>
	</form>
</div>

@endsection