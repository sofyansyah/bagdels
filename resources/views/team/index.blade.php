@extends('layouts.master')

@section('content')
<style type="text/css">
    .count li{
    padding: 0px 5px;
    display: inline-block;
    text-align: center;
    font-size: 12px;
    font-family: 'hind-regular';
  }

</style>
<div class="container">
<div class="col-md-12">
    <div class="row text-center">
      @forelse($teams as $team)
       <div class="col-md-4">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/'. $team->image_small)}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <a href="{{'team/'. $team->id}}"><h4 style="font-family: 'hind-bold'; text-align: left; ">{{ str_limit($team->title, 25) }}</h4></a><br>
                <p style="text-align: left; font-size: 15px;">{{ str_limit($team->description, 130) }}</p>
                <ul class="count" style="padding-left: 0; margin-top: 10px;">
                  <li>Story <span>12</span></li>
                  <li>Watches <span>110</span></li>
                  <li>Participants <span>20</span></li>
                </ul>
                <br>
                <button class="btn btn-primary" style="border-radius: 20px;
                padding: 5px 25px; font-size: 14px; float: left; border: none; ">Watch</button>
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