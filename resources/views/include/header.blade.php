<style type="text/css">

  .navbar{
    border-radius: 0px;
    font-family:'hind-medium';
    background-color: #fff;
    color: #f60;
    /*box-shadow: -1px 0px 7px 2px rgba(209, 207, 205, 0.38);*/
    border-bottom: 1px solid #ddd;

  }
  .navbar .menu{
    color: #fff;
    padding: 0px 20px;
    background-color: #3498db;
    border-radius: 20px;

  }

  .navbar .menu a{
    color: #fff;
    padding:0 5px;
  }
  .navbar .menu a:hover, .navbar .menu1 a:hover,  .navbar .create a:hover{
    color: #F2BB05;
    background: none;
  }

  .navbar .menu{
    margin: 0 5px 0 0;
  }
  .navbar .menu1 a{
    color: #333;
  }
  #searchbar {
    display: none;
    float: left;
    width: 100%;
    height: 62px;
    border-top: 1px solid #d8d8d8;
    padding-left: 25px;
    padding-right: 10px;
    z-index: 9999;
    background: #fff;
    -webkit-box-shadow: -1px 2px 2px rgba(0,0,0,0.2);
    -moz-box-shadow: -1px 2px 2px rgba(0,0,0,0.2);
    box-shadow: -1px 2px 2px rgba(0,0,0,0.2);
  }

  #s {
    display: block;
    width: 88%;
    border: 0;
    outline: none;
    padding: 0;
    height: 60px;
    line-height: 60px;
    font-size: 3.0em;
    font-weight: bold;
    color: #676767;
  }

  #searchsubmit {
    display: block;
    float: right;
    margin-top: 6px;
    background: none;
    color: #717171;
    border: 0;
    outline: none;
    cursor: pointer;
  }

</style>
<script>
  window.Laravel = <?php echo json_encode([
    'csrfToken' => csrf_token(),
    ]); ?>
  </script>

  <nav class="navbar" id="topnav">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        @if (Auth::guest())
        <a class="navbar-brand" href="{{'/'}}" style="color:#333; font-size: 25px; font-family:'hind-bold'!important;">Bagidelo</a>
        @else
        <a class="navbar-brand" href="{{'/'}}" style="color:#333; font-size: 25px; font-family:'hind-bold'!important;">Bagidelo</a>
        @endif
      </div>
      <div class="collapse navbar-collapse" id="myNavbar" style="padding: 0;">
        @if (Auth::guest())
        @else
        <ul class="nav navbar-nav navbar-left" style="padding: 7px 0;">
          <li class="menu1"><a href="{{url('discover')}}">Discover</a></li>
          <li class="menu1"><a href="{{url('#')}}">Challenge</a></li>
          <li class="menu1"><a href="{{url('/list-team')}}">Team Up</a></li>
          <!--  <li><a href="#" id="searchtoggl"><i class="fa fa-search fa-lg"></i></a></li> -->
        </ul>
        @endif

        @if (Auth::guest())
        <ul class="nav navbar-nav navbar-right menu" style="padding: 7px 5px; margin-top: 7px;">
          <li class=""><a href="{{url('/register')}}">Sign Up</a></li>
          <li>/</li>
          <li class=""><a href="{{url('/login')}}">Sign In</a></li>
        </ul>
        @else
        <ul class="nav navbar-nav navbar-right" style="padding: 7px; margin-top: 7px;">
        <li class="create" style="padding:0 15px; border-radius: 20px; background-color:#3498db; "><a href="{{'/upload'}}" style="color: #fff;"><i class="fa fa-pencil" style="font-size: 14px;" title="Upload"></i> Ide</a></li>
          <li class="" style="margin: 0 5px;"><a href="{{url('profile/' .Auth::user()->name)}}" style="padding: 0">
            @if(Auth::user()->photo == null)
            <img src="{{asset('img/icon/user.svg')}}" width="34" class="img-circle" ></a></li>
            @else
            <img src="{{asset('img/avatar/' .Auth::user()->photo)}}" width="34" class="img-circle" ></a></li>
            @endif

            <li class="create">
            <a href="{{ url('/logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();" style="color: #f60; border-color: #f60;">
            <!-- <img src="{{asset('img/icon/exit.svg')}}" height="18"> --> Logout
          </a>

          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
      @endif
    </div>
  </div>

</nav>
<div id="searchbar" class="clearfix">
  <form id="searchform" method="get" action="searchpage.php">
    <button type="submit" id="searchsubmit" class="fa fa-search fa-4x"></button>
    <input type="search" name="s" id="s" placeholder="Keywords..." autocomplete="off">

  </form>
</div>


@yield('js')
<!-- Scripts -->
<script src="{{asset('js/app.js')}}"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- <script>
  var search_bar = $('#searching_for');
  search_bar.on('keypress', function(e){
    if(e.which==13)
    {
      if(search_bar.val() != "")
        window.location = "{{url('/search/')}}/" +encodeURIComponent(search_bar.val());
}
});
</script> -->
<script>
  $(function(){
    var $searchlink = $('#searchtoggl i');
    var $searchbar  = $('#searchbar');
    
    $('#myNavbar ul li a').on('click', function(e){
      e.preventDefault();
      
      if($(this).attr('id') == 'searchtoggl') {
        if(!$searchbar.is(":visible")) { 
        // if invisible we switch the icon to appear collapsable
        $searchlink.removeClass('fa-search').addClass('fa-search-minus');
      } else {
        // if visible we switch the icon to appear as a toggle
        $searchlink.removeClass('fa-search-minus').addClass('fa-search');
      }
      
      $searchbar.slideToggle(300, function(){
        // callback after search bar animation
      });
    }
  });
</script>