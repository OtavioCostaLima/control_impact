@extends('layouts.app')

@section('content')
<div class="container">
    <div class="center">
        <div class="card bordered z-depth-2" style="margin:0% auto; max-width:400px;">
            <div class=card-header"> <i class="material-icons medium red-text">perm_identity</i>
            </div>
            <div class="card-content" >
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s12">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                        <label for="email">E-Mail</label>
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12">
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <br>
                    <input type="checkbox" name="remember" id="remember" class="filled-in" {{ old('remember') ? 'checked' : ''}} > 
                           <label for="remember">Lembrar-me</label>
                    <button type="submit" class="btn blue-grey right waves-effect waves-light white-text">Login</button>

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">

                        </div>
                    </div>
                </form>
            </div>
            <div class="card-action clearfix">
                <div class="row">
                    <div class="col s6 text-p">
                        <a href="{{ url('/password/reset') }}" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip=" Esqueceu sua senha?"> Esqueceu sua senha?</a>
                    </div>
                    <div class="col s6 right-align text-p">
                        <a href="#" class="orange-text tooltipped" data-position="top" data-delay="50" data-tooltip="Register now!">Register now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $(".button-collapse").sideNav();
  </script>
    @endsection
