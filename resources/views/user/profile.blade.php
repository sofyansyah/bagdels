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
</style>
@section('content')

<div class="container" style="margin-top: 8%; max-width: 900px;">
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-body">
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
            <p style="padding: 1px 10%; color: #aaa;">"{{$user->bio}}"</p>
            <ul class="sosmed">
              <li>Facebook</li>
              <li>Instagram</li>
              <li>Twitter</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">

      <div class="col-md-4" style="padding: 0; margin: 0px;">
       <a href="{{'/detail'}}"> 
        <div class="containers">
          <img src="{{'/img/avatar/raka_SpID.jpg'}}" class="image"/>
          <div class="overlay">
            <div class="text">Hello World</div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-2 col-sm-6" style="margin-bottom: 15px;">
     <a href="#"> 
       <div class="containers"> 
         <img src="https://i.pinimg.com/736x/2e/68/b4/2e68b4e53a0ce8ebded4d934ad38c1fb--black-white-photography-minimal-photography.jpg" class="image"/>
         <div class="overlay">
          <div class="text">Hello World</div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-2" style="margin-bottom: 15px;">
   <a href="#">
     <div class="containers">
       <img src="https://cdn0-a.production.vidio.static6.com/uploads/channel/image/23976/cartoon-mr-bean-b4bf49.jpg" class="image"/>
       <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
 <a href="#">
   <div class="containers">
     <img src="https://lh4.ggpht.com/7_wzEOZXIsCf1Wb1_C_IwRKMYKwIc43tAYwFwmmD5YZA7YkQzOBINPvwixGoIKWo3pQ=w300" class="image"/>
     <div class="overlay">
      <div class="text">Hello World</div>
    </div>
  </div>
</a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers"><img src="http://thepowerpuffgirls.cartoonnetworkhq.com/images/social/Group-OG.jpg" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://www.graphicsfactory.com/clip-art/image_files/image/7/764587-Football006_ssc.gif" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://i.pinimg.com/736x/51/7c/ac/517cacfdf952739fc1237603bea589f3--king-of-the-hill-cartoon-tv.jpg" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://i.pinimg.com/736x/57/19/4c/57194c92d901bf327f9e9bd0bf7ff9d4--beach-photography-tips-white-photography.jpg" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://i.vimeocdn.com/portrait/14036707_300x300" width="100%"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://www.graphicsfactory.com/clip-art/image_files/image/7/764587-Football006_ssc.gif" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://i.vimeocdn.com/portrait/14036707_300x300" width="100%"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
 <a href="#"> 
   <div class="containers"> 
     <img src="https://i.pinimg.com/736x/2e/68/b4/2e68b4e53a0ce8ebded4d934ad38c1fb--black-white-photography-minimal-photography.jpg" class="image"/>
     <div class="overlay">
      <div class="text">Hello World</div>
    </div>
  </div>
</a>
</div>

<div class="col-md-2" style="margin-bottom: 15px;">
 <a href="#">
   <div class="containers">
     <img src="https://cdn0-a.production.vidio.static6.com/uploads/channel/image/23976/cartoon-mr-bean-b4bf49.jpg" class="image"/>
     <div class="overlay">
      <div class="text">Hello World</div>
    </div>
  </div>
</a>
</div>
<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers"><img src="http://thepowerpuffgirls.cartoonnetworkhq.com/images/social/Group-OG.jpg" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>

<div class="col-md-2" style="margin-bottom: 15px;">
  <a href="#">
    <div class="containers">
      <img src="https://www.graphicsfactory.com/clip-art/image_files/image/7/764587-Football006_ssc.gif" class="image"/>
      <div class="overlay">
        <div class="text">Hello World</div>
      </div>
    </div>
  </a>
</div>

</div>


</div>
</div>

@endsection