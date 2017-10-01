@extends('layouts.master')
<style type="text/css">
	.navbar{
		margin-bottom: 0px!important;
	}
	.navbar-nav li a{
		font-family: 'hind-regular';
		color: #aaa;
	}
</style>
@section('content')
<div class="container">
	<nav class="navbar a" style="border-bottom: 1px solid #ddd!important;">

		<ul class="nav navbar-nav" style="margin-top: 5px; padding-left: 0;">
			<li class="active"><a href="#" style="color: #333;">Semua Kategori</a></li>
			<li><a href="#">Sosial</a></li>
			<li><a href="#">Budaya</a></li>
			<li><a href="#">Edukasi</a></li>
			<li><a href="#">Bisnis</a></li>
			<li><a href="#">Komunitas</a></li>
			</ul>
	</nav>
	<div class="col-md-12 featured" style="padding: 20px 0">
		<div class="row text-center">
			@forelse($ideas as $idea)
			<div class="col-md-4" style="margin-bottom: 10px;">
				<div class="panel-default">
					<div class="panel-body">
						<img src="{{asset('img/'. $idea->image_small)}}" width="100%" height="200" style="margin-bottom: 15px;"/>
						<div class="body-text" style="padding: 0 20px 10px;"><a href="{{'idea/'. $idea->id}}">
							<h4 style="font-family: 'hind-bold'; text-align: left; ">{{$idea->title}}</h4></a>
							<br>
							<p style="text-align: left; font-size: 15px;">{{ str_limit($idea->description, 130) }}</p>
							<hr/>
							<div class="col-md-7" style="padding: 0;">
								<ul class="feed-body">
									@if($idea->user_avatar == null)
									<li><img src="{{asset('img/icon/user.svg')}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" /></li>
									@else
									<li><img src="{{'/img/avatar/'. $idea->user_avatar}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" /></li>
									@endif
									<li style="padding: 5px 0 5px; text-align: left;"><a href="{{'/profile/'. $idea->user_name}}" ><h4>{{$idea->user_name}}</h4></a></li>
								</ul>
							</div>
							<div class="col-md-5" style="padding:0;">
								<button type="button" class="btn btn-primary" style="background-color: #ddd; border: none;  border-radius: 30px; padding:5px 15px 3px;"><i class="fa fa-heart" style="margin-right: 10px; font-size: 16px; color: #666;"></i><span class="" style="color:#666; font-family: 'hind-medium' ">271</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			@empty
			@endforelse
		</div>
	</div>
</div>
@endsection