@extends('layouts.master')
<style type="text/css">

  h2{
    font-family: 'hind-bold'!important;
    font-size: 18px!important;
  }
  .col-md-2{
    margin: 0!important;
    padding: 0!important;
  }
  .image {
    display: block;
    width: 100%;
    height: auto;
  }

  .containers {
    position: relative;

  }

  .col-md-4{
    margin: 0px!important;

  }

  .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: #008CBA;
  }

  .containers:hover .overlay {
    opacity: 1;
  }

  .text {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }
  .bottom-left {
    position: absolute;
    bottom:0px;
    width: 100%;
  }
  .art-body li{
    display: inline-block;

  }
  .art-body{
    padding: 5px;
  }
  .cover-button li{
    display: inline-block;
    padding: 0 10px 0 0;
  }
  .cover-button li .btn{
    border-radius: 20px;
    padding: 5px 15px;
  }
  .cover-button{
    padding-left: 0;
    margin-top: 10px;
  }
  .count li{
    padding: 0px 5px;
    display: inline-block;
    text-align: center;
    font-size: 12px;
    font-family: 'hind-regular';
  }
</style>
@section('content')

<div class="container">
  <div class="col-md-12" style="padding: 0; margin-bottom: 20px;">
    <div class="col-md-7" style="padding: 30px 0;">
      <h4 style="font-size: 36px; font-family: 'hind-bold';">Gabung dan Temukan Rekan Untuk Wujudkan Ide mu</h4><br>
      <p style="line-height: 20px!important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
      <br>
      <ul class="cover-button">
        <li><button class="btn btn-primary">Get Started</button></li>
        <li><button class="btn btn-success">How It Works ?</button></li>
      </ul>
    </div>
    <div class="col-md-5" style="padding: 0;">
      <img src="{{asset('img/demo/cover.png')}}" width="100%" />
    </div>
  </div>

  <div class="col-md-12 featured" style="padding: 20px 0">
    <div class="row">
      <div class="col-md-6">
        <h2>IDEAS</h2>
      </div>
      <div class="col-md-6">
        <h2 style="float: right; color:#666666; font-family: 'hind-medium'!important; font-size: 14px!important;">See all</h2>
      </div>
    </div>
    <hr/>
    <div class="row text-center" style="margin-top: 20px;">
@forelse($ideas as $idea)
      <div class="col-md-4" style="margin-bottom: 15px!important;">
        <div class="panel-default">
          <div class="panel-body">
            <img src="{{asset('img/'. $idea->image_small)}}" width="100%" style="margin-bottom: 15px;"/>
            <div class="body-text" style="padding: 0 20px 10px;">
              <a href="{{'idea/'. $idea->id}}"><h4 style="font-family: 'hind-bold'; text-align: left; ">{{ str_limit($idea->title, 25) }}</h4></a><br>
              <p style="text-align: left; font-size: 15px;">{{ str_limit($idea->description, 130) }}</p>
              <hr/>
              <div class="col-md-7" style="padding: 0;">
                <ul class="feed-body">
                  <li><img src="{{'/img/avatar/'. $idea->user_avatar}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                  <li style="padding: 5px 0 5px; text-align: left;"><h4>{{$idea->user_name}}</h4>
                    <p style="font-size: 12px; color: #bbb;">5 minutes ago</p>
                  </li>
                </ul>
              </div>
              <div class="col-md-5 text-right" style="padding:0;">
                <button type="button" class="btn btn-primary" style="background-color: #ddd; border: none;  border-radius: 30px; padding:5px 10px 3px;"><i class="fa fa-heart" style="margin-right: 5px; font-size: 14px; color: #666;"></i><span class="" style="color:#666; font-family: 'hind-medium'; font-size: 12px;">271</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      @empty
      @endforelse
     

    </div>

    <div class="col-md-12 featured" style="padding: 20px 0;margin-bottom: 20px;">
      <div class="row">
        <div class="col-md-6">
          <h2>TEAM UP</h2>
        </div>
        <div class="col-md-6">
          <h2 style="float: right; color:#666666; font-family: 'hind-medium'!important; font-size: 14px!important;">See all</h2>
        </div>
      </div>
      <hr/>
      <div class="row text-center" style="margin-top: 20px;">
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

    <div class="user-join">
      <div class="col-md-12" style="padding: 0;">
        <h2>UPCOMING EVENTS</h2>
        <hr/>
        <div class="col-md-7">
          <img src="{{asset('img/demo/team1.png')}}" width="100%;">
        </div>
        <div col-md-5>
          <h1 style="padding: 5px 5px 20px; font-size: 32px; font-family: 'hind-bold';">Title of Events</h1>
          <p style="line-height: 20px!important;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
          <br>
          <button class="btn btn-primary" style="border-radius: 20px;
                padding: 5px 25px; font-size: 14px; float: left; border: none; ">Read More</button>
        </div>

      </div>
    </div>
  </div>


</div>

@endsection