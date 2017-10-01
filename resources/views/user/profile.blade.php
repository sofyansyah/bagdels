@extends('layouts.master')
<style type="text/css">
  .sosmed li{
    display: inline-block;
    padding: 5px;
    font-family: 'hind-medium';
  }
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
  .jumbotron{
    background-image: 
    linear-gradient(to bottom, rgba(255,255,255,0.8) 0%,rgba(255,255,255,0.9) 100%), url('/img/demo/idea3.png'); background-repeat: no-repeat;min-height: 350px;
  }
</style>
@section('content')


<div class="container" style="max-width: 900px;">
  <div class="jumbotron">
   <div class="col-md-12 text-center">
    @if($user->photo == null)
    <img src="{{asset('img/icon/user.svg')}}" class="img-circle" width="100"/>
    @else
    <img src="{{'/img/avatar/'. $user->photo}}" class="img-circle" width="100"/>
    @endif
    <br>
    <!-- <a href="{{'/'. $user->name. '/profile-edit'}}" class="btn btn-warning">Edit Profile</a> -->
    <h4 style="font-size: 20px; padding:5px;">{{$user->name}}</h4>
    <h4 style="font-size: 14px; padding:5px; color:#f60;">{{$user->job}}</h4>
    <p style="padding: 1px 10%; color: #aaa; margin-bottom: 2px;">"{{$user->bio}}"</p>
    @if ($user->name == Auth::user()->name)
    <button type="button" class="btn btn-success">Inbox</button>
    <a href="{{'/'. $user->name. '/profile-edit'}}" class="btn btn-info">Edit</a>
    @else
      @if(count($follow) > 0)
      <a href="{{url('unfollow/'.$follow->id)}}" class="btn btn-success"> Followed </a>
      @else
      <a href="{{url('follow/'.$user->id)}}" class="btn btn-info"> Follow</a>
      @endif
      @endif
      <ul class="sosmed">
        <li>Facebook</li>
        <li>Instagram</li>
        <li>Twitter</li>
      </ul>

    </div>

  </div>

  <div class="row">
    <div class="col-md-9">
    <h4 style="font-size: 20px; font-family: 'hind-medium' ">Idea</h4>
    <hr>
@forelse($ideas as $idea)
      <div class="col-md-6 col-sm-6" style="margin-bottom: 15px;">
       <a href="#"> 
         <div class="containers"> 
           <img src="{{'/img/' .$idea->image_small}}" class="image" width="100%" />
           <div class="overlay">
           <a href="{{'/idea/'. $idea->id}}"><div class="text"> {{$idea->title}}</div></a>
          </div>
        </div>
      </a>
    </div>
    @empty
    @endforelse
</div>
    <div class="col-md-3">
     <h4 style="font-size: 20px; font-family: 'hind-medium' ">Team</h4>
    <hr>
    @forelse($teams as $team)
    <div class="col-md-12">
     <img src="{{'/img/'. $team->image_small}}" class="image" width="100%" />
    </div>
    @empty
    @endforelse
    </div>



  
</div>
</div>




@endsection