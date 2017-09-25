@extends('layouts.master')
<style type="text/css">
	.sosmed li{
		display: inline-block;
		padding: 5px;
		font-family: 'hind-medium';
	}
	label{
		padding-bottom: 5px!important;
		font-size: 14px!important;
	}
</style>

@section('content')
<div class="container" style="margin-top: 8%; max-width: 900px;">
	<div class="col-md-12 nopadding">
		<div class="panel panel-default">
			<div class="panel-body text-center">
				<form action="{{url('profile/'.$user->id.'/edit')}}" method="POST" style="text-align: left!important;" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-md-6">
								
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" class="form-control" value="{{$user->name}}" readonly>
								</div>
								<div class="form-group">
									<label>Bio</label>
									<input type="text" name="bio" class="form-control" value="{{$user->bio}}">
								</div>
								<div class="form-group">
									<label>Job</label>
									<input type="text" name="job" class="form-control" value="{{$user->job}}">
								</div>
								<div class="form-group">
									<label>Facebook</label>
									<input type="text" name="facebook" class="form-control" value="{{$user->facebook}}">
								</div>
								<div class="form-group">
									<label>Twitter</label>
									<input type="text" name="twitter" class="form-control" value="{{$user->twitter}}">
								</div>
								<div class="form-group">
									<label>Instagram</label>
									<input type="text" name="instagram" class="form-control" value="{{$user->instagram}}">
								</div>
								<div class="form-group">
									<label>Web</label>
									<input type="text" name="web" class="form-control" value="{{$user->web}}">
								</div>
							</div>
							<div class="col-md-6">
								<div class="image" width="100%" style="height: 405px; background-color: #eee;"><img id="myImg" width="100%" /></div>
								<div class="form-group">
									<input type="file" name="photo" class="form-control" placeholder="Image">
								</div>
								<input type="submit" class="form-control" value="Upload" style="background-color: #f60;color: #fff; font-family: 'hind-medium' ">
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function () {
		$(":file").change(function () {
			if (this.files && this.files[0]) {
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
			}
		});
	});

	function imageIsLoaded(e) {
		$('#myImg').attr('src', e.target.result);
	};
</script>
@endsection