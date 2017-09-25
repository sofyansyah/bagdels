@extends('layouts.master')
<style type="text/css">
	h2{
		font-family: 'hind-bold'!important;
		
	}
	select, textarea{
		font-family: 'hind-regular'!important;
	}
	.like li{
		display: inline-block;
		padding: 5px;
	}
</style>
@section('content')

<div class="container" style="margin-top: 8%; max-width: 900px;">

	<div class="panel panel-default">
		<div class="panel-body">
			<form action="{{'post-idea'}}" method="POST" style="text-align: left!important;" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" name="title" class="form-control" placeholder="Title">
					</div>
					
					<div class="form-group">
						<textarea class="form-control" placeholder="Description" rows="5" name="description"></textarea>
					</div>
					<div class="form-group">
						<input type="text" name="tags" class="form-control" placeholder="Tags">
					</div>
				</div>
				<div class="col-md-6">
					<div class="image" width="100%" style="height: 405px; background-color: #eee;"><img id="myImg" width="100%" /></div>
					<div class="form-group">
						<input type="file" name="image" class="form-control" placeholder="Image">
					</div>
					<input type="submit" class="form-control" value="Upload" style="background-color: #f60;color: #fff; font-family: 'hind-medium' ">
				</div>
			</form>
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