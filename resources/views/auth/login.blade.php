@extends('layouts.applogin')
@section('content')
<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('administrator/login') }}">
            {{ csrf_field() }}
              <h1>Login</h1>
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
              <div class="form-group left">
                <div class="col-md-12">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Remember Me
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group left">
              <div class="col-md-12">
                <button type="submit" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i>Log in</button>
                <a class="reset_pass" href="{{ url('administrator/password/reset') }}">Lost your password?</a>
               </div>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>
                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 Faizal Ruzky. Template by gentelella</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}
            <h1>Register</h1>
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
              <div>
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name"/>
                @if ($errors->has('name'))
              <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
              </span>
              @endif
              </div>
              
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
              <div>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"/>
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
              <div lass="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password" />
                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
              <div lass="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Comfirm Password" />
                @if ($errors->has('password_confirmation'))
                <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
                @endif
              </div>
              <div>
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i> Register
                </button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2016 Faizal Ruzky. Template by gentelella</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    @endsection