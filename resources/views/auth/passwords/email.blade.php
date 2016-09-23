@extends('layouts.applogin')

<!-- Main Content -->
@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif

            <form class="form-horizontal" role="form" method="POST" action="{{ url('administrator/password/email') }}">
                {{ csrf_field() }}
                <h1>Reset Password</h1>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">

                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif

                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
                        </button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator"></div>
                    <br />

                    <div>
                        <p>©2016 Faizal Ruzky. Template by gentelella</p>
                    </div>
                </div>
            </form>
        </section>
    </div>
</div>
@endsection
