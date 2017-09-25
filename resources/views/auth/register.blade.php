@extends('layouts.master')
<style type="text/css">
    .navbar{
        visibility: hidden;
    }
</style>
@section('content')
<div class="container" style="max-width: 400px;">

    <div class="row" style="margin: 25% 0;">
        <h1 style="font-family: 'hind-bold'; text-align: center; color: #333; font-size: 32px; ">SIGN UP</h1><br>
        
        <div class="col-md-12" style="padding: 4% 10px;">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   
                    <div class="col-md-12">
                        <label for="name" control-label">Name</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  

                    <div class="col-md-12">
                        <label for="email" control-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  

                    <div class="col-md-12">
                       <label for="password" control-label">Password</label>
                       <input id="password" type="password" class="form-control" name="password" required>

                       @if ($errors->has('password'))
                       <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                   <label for="password-confirm" control-label">Confirm Password</label>
                   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
               </div>
           </div>

           <div class="form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" style="font-family: 'hind-regular'; width: 100%; ">
                    Register
                </button>
            </div>
        </div>
    </form>
    
    
</div>
</div>
</div>
@endsection
