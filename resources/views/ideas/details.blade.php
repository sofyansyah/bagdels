@extends('layouts.master')

@section('content')
<style type="text/css">
	.tags li, .share li{
		display: inline-block;
	}
</style>
<div class="container" style="margin-bottom:20px; max-width: 750px;">
	<div class="col-md-12" style="padding:0; padding-bottom: 20px;">
		<h4 style="font-family: 'hind-bold';font-size: 20px; margin-bottom: 15px;">{{$idea->title}}</h4>
		<img src ="{{asset('img/'. $idea->image_normal)}}" width="100%" />
	</div>
	<div class="col-md-12" style="padding:0 0 20px;">
		<br>
		<p style="padding-bottom: 10px;">{{$idea->description}}</p>
		<ul class="tags">
			<li><h4 class="btn btn-info" style="padding: 5px 15px; background-color: #ddd;color: #333; border: none;">ini tags</h4></li>
			<li><h4 class="btn btn-info" style="padding: 5px 15px; background-color: #ddd;color: #333; border: none;">ini tags</h4></li>
			<li><h4 class="btn btn-info" style="padding: 5px 15px; background-color: #ddd;color: #333; border: none;">ini tags</h4></li>
		</ul>
		<hr/>
		<div class="col-md-12" style="padding: 0;margin-bottom: 10px;">
			<p class="pull-left"><i class="fa fa-heart-o" style="font-size: 20px;"></i> 20</p>
			<ul class="share text-right">
				<li><img src="{{asset('img/icon/insta.svg')}}" width="24" /></li>
				<li><img src="{{asset('img/icon/twit.svg')}}" width="24" /></li>
				<li><img src="{{asset('img/icon/fb.svg')}}" width="24" /></li>
			</ul>
		</div>
		{{--@if($idea->user_avatar == null)
		<img src="{{asset('img/icon/user.svg')}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" />
		@else
		<img src="{{asset('img/avatar/'.$idea->photo)}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" />
		@endif
		<h4 style="font-family: 'hind-medium';">by : {{$idea->user_name}}</h4>--}}
	</div>

	<div class="col-md-12" style="padding: 0;">
		<h2>{{$comment->count()}} Comment</h2>
		<br>
		<div class="panel-default">
			<div class="panel-body" style="padding: 10px;">
				<div class="form-group">
				<label class="control-label col-sm-1" for="email" style="padding: 0">

						@if(Auth::user()->photo == null)
						<img src="{{asset('img/icon/user.svg')}}" width="40" class="img-circle" ></a></li>
						@else
						<img src="{{asset('img/avatar/' .Auth::user()->photo)}}" width="40" class="img-circle" ></a></li>
						@endif
					</label>
					<div class="col-sm-11">
						<form action="{{url('post-comment')}}" method="POST">
							{{ csrf_field()}}
							<input type="text" name="reply" id="reply" class="form-control" style="background-color: #fff;" placeholder="Write a comment . . .">
							<br>
							<input type="hidden" name="id" value="{{$idea->id}}">
							<input type="hidden" name="status" value="1">
							<input type="submit" class="btn btn-primary pull-right" value="Post" style="border: none;  border-radius: 30px; padding:4px 25px; margin-right: 10px;">
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<br>

		@forelse($comment as $com)
		<div class="col-md-12" style="padding:0; margin-bottom: 10px;">
			<div class="panel-default">
				<div class="panel-body" style="padding: 15px 15px;">
					@if($com->user_avatar == null)
					<img src="{{asset('img/icon/user.svg')}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" />
					@else
					<img src="{{asset('img/avatar/'.$com->user_avatar)}}" class="img-circle" width="50" style="float: left; margin-right: 10px;" />
					@endif
					<h4 style="font-family: 'hind-medium'; padding: 8px 0;">{{$com->name}}</h4>
					<p style="font-size: 12px;">4 hours ago</p>
	<br><br>
					<p style="font-size: 14px;">{{$com->reply}}</p>
				</div>
			</div>
		</div>
		@empty
		@endforelse


	</div>
	{{--<div class="col-md-4">
	@if ($user->id == Auth::id())
	<li><button type="button" class="btn btn-success" style="width: 100%; margin-bottom: 5px;">Inbox</button></li>
	@else
	<li>
		@if(count($follow) > 0)
		<a href="{{url('unfollow/'.$follow->id)}}" class="btn btn-success" style="margin-bottom: 5px; width: 100%;"> Followed </a>
		@else
		<a href="{{url('follow/'.$user->username)}}" class="btn btn-info" style="margin-bottom: 5px; width: 100%;"> Follow</a>
		@endif
		@endif
	</li>
</div>--}}
</div>


@endsection