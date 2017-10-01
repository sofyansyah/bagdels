@extends('layouts.master')

@section('content')
<div class="container">
<div class="col-md-12">
    <div class="row text-center">
      @forelse($teams as $team)
      <div class="col-md-4" style="margin-bottom: 10px;">
        <div class="panel-default">
          <div class="panel-body">
            <img src="{{asset('img/'. $team->image_small)}}" width="100%" height="200" style="margin-bottom: 15px;"/>
            <div class="body-text" style="padding: 0 20px 10px;"><a href="{{'team/'. $team->id}}">{{$team->title}}</a>
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