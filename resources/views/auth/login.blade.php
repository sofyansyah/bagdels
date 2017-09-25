@extends('layouts.master')
<style type="text/css">
    .navbar{
        visibility: hidden;
    }
</style>
@section('content')
<div class="container" style="max-width: 400px;">
    <div class="row" style="margin: 25% 0;">
     <h1 style="font-family: 'hind-bold'; text-align: center; color: #333; font-size: 32px; ">Sign In</h1><br>
 
    <div class="col-md-12" style="padding: 4% 10px;">
       <form class="form-horizontal" action="{{url('post-login')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <div class="col-md-12">
                <label for="email" control-label">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
              
                </div>
            </div>

            <div class="form-group">
             <div class="col-md-12">
                <label for="password" control-label">Password</label>
                    <input id="password" type="password" class="form-control" name="password" required>
                </div>
            </div>

            {{--<div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
            </div>--}}

            <div class="form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" style="font-family: 'hind-regular'; width:100%;">
                        Login
                    </button>

                    <a class="btn btn-link" href="{{ route('password.request') }}" style="font-family: 'hind-regular';">
                        Forgot Your Password?
                    </a>
                </div>
            </div>
        </form>
    </div>


</div>
</div>
</div>
@endsection
