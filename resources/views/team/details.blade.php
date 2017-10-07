@extends('layouts.master')

<style type="text/css">
  .navbar{margin-bottom: 0;
    border-bottom: none!important;}
    .btn-info, .btn-success, .btn-primary, .btn-default{
      border-radius: 20px!important;
      padding: 5px 15px!important;
      border:none!important;
    }
    .jumbotron{
      margin: 0!important;
      padding: 10% 15%;
    }
    .navbar-nav li a{
      color: #aaa;
    }
  </style>

  @section('content')
  <div class="jumbotron" style="background-image: 
  linear-gradient(to bottom, rgba(255,255,255,0.8) 0%,rgba(255,255,255,0.9) 100%), url('/img/demo/idea3.png'); background-size: 100%; background-repeat: no-repeat;  min-height: 250px;">
  <div class="text-center">
    <h1>{{$team->title}}</h1>
    <h4>Jakarta</h4>
    <br>
    <p>{{$team->description}}</p>
  </div>
</div>



<nav class="navbar" style="border-bottom: 1px solid #ddd!important;">
  <div class="container-fluid">
    <ul class="nav navbar-nav" style="margin-top: 5px;">
      <li class="active"><a data-toggle="tab" href="#menu1" style="color: #333; font-family: 'hind-bold';">Activity</a></li>
      <li><a data-toggle="tab" href="#menu2">Participant</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><button class="btn btn-info">Watch</button></a></li>
      <li><a href="#"><button class="btn btn-success">Message</button></a></li>
      @if ($team->user_id == Auth::user()->id)
      <li><a href="{{$team->id. '/edit'}}"><button class="btn btn-default"><img src="{{asset('img/icon/setting.svg')}}" width="20" /></button></a></li>
      @else
      
      @endif
    </ul>
  </div>
</nav>
<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" style="padding-bottom: 20px; border-bottom: 1px solid #ddd; margin-bottom: 20px;">
          <div class="col-md-7">
            <img src="{{asset('img/demo/team1.png')}}" width="100%">
          </div>
          <div class="col-md-5">
            <h1>Title of Events</h1>
            <br>
            <p style="line-height: 20px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur</p>
          </div>
        </div>
        <div class="col-md-12">
         <div class="col-md-4" style="margin-bottom: 15px!important;">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/demo/idea1.png')}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <h4 style="font-family: 'hind-bold'; text-align: left; ">Lorem Ipsum</h4><br>
                <p style="text-align: left; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <hr/>
                <div class="col-md-7" style="padding: 0;">
                  <ul class="feed-body">
                    <li><img src="{{'/img/demo/ava.png'}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                    <li style="padding: 5px 0 5px; text-align: left;"><h4>Raka</h4>
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
        <div class="col-md-4" style="margin-bottom: 15px!important;">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/demo/idea1.png')}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <h4 style="font-family: 'hind-bold'; text-align: left; ">Lorem Ipsum</h4><br>
                <p style="text-align: left; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <hr/>
                <div class="col-md-7" style="padding: 0;">
                  <ul class="feed-body">
                    <li><img src="{{'/img/demo/ava.png'}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                    <li style="padding: 5px 0 5px; text-align: left;"><h4>Raka</h4>
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
        <div class="col-md-4" style="margin-bottom: 15px!important;">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/demo/idea1.png')}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <h4 style="font-family: 'hind-bold'; text-align: left; ">Lorem Ipsum</h4><br>
                <p style="text-align: left; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <hr/>
                <div class="col-md-7" style="padding: 0;">
                  <ul class="feed-body">
                    <li><img src="{{'/img/demo/ava.png'}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                    <li style="padding: 5px 0 5px; text-align: left;"><h4>Raka</h4>
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

        <div class="col-md-4" style="margin-bottom: 15px!important;">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/demo/idea1.png')}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <h4 style="font-family: 'hind-bold'; text-align: left; ">Lorem Ipsum</h4><br>
                <p style="text-align: left; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <hr/>
                <div class="col-md-7" style="padding: 0;">
                  <ul class="feed-body">
                    <li><img src="{{'/img/demo/ava.png'}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                    <li style="padding: 5px 0 5px; text-align: left;"><h4>Raka</h4>
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
        <div class="col-md-4" style="margin-bottom: 15px!important;">
          <div class="panel-default">
            <div class="panel-body">
              <img src="{{asset('img/demo/idea1.png')}}" width="100%" style="margin-bottom: 15px;"/>
              <div class="body-text" style="padding: 0 20px 10px;">
                <h4 style="font-family: 'hind-bold'; text-align: left; ">Lorem Ipsum</h4><br>
                <p style="text-align: left; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                <hr/>
                <div class="col-md-7" style="padding: 0;">
                  <ul class="feed-body">
                    <li><img src="{{'/img/demo/ava.png'}}" class="img-circle" width="48" style="float: left; margin-right: 10px;" /></li>
                    <li style="padding: 5px 0 5px; text-align: left;"><h4>Raka</h4>
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




      </div>


    </div>
  </div>

</div>

<div id="menu2" class="tab-pane fade">
  <div class="container-fluid">
    <div class="col-md-12" style="margin-bottom: 5%;">
      <h3>Admin</h3>
      <hr/>
      <br>
      <img src="{{asset('img/avatar/'. $user->photo)}}" width="70" class="img-circle">
    </div>
    <div class="col-md-8">
      <h3>Member</h3>
      <hr>
      <div class="row">
        <div class="col-md-1">
          <img src="{{asset('img/avatar/heri.png')}}" width="50" class="img-circle">
        </div>
        <div class="col-md-1">
          <img src="{{asset('img/avatar/febi.png')}}" width="50" class="img-circle">
        </div>
        <div class="col-md-1">
          <img src="{{asset('img/avatar/nadia.png')}}" width="50" class="img-circle">
        </div>
        <div class="col-md-1">
          <img src="{{asset('img/avatar/gua.png')}}" width="50" class="img-circle">
        </div>
      </div>
    </div>
  </div>
</div>

</div>
@endsection