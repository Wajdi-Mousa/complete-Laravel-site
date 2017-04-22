@extends('layouts.app')

@section('title')
تسجيل الدخول
@endsection

@section('header')

@endsection

@section('content')
<div class="container" style="background-color:#d7e9d1;margin-top:25px;margin-bottom:25px;">
  <div class="contact_bottom"style="direction:rtl;margin-top:10px;" >
    <h3>تسجيل الدخول</h3>
    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <div class="col-md-8">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <label for="email" class="col-md-2 control-label">البريد الإالكترونى:</label>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


            <div class="col-md-8">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
              <label for="password" class="col-md-2 control-label">كلمة المرور :</label>
        </div>

        <div class="form-group">
          <div class="col-md-7 control-label">
            <div class="col-md-2 col-md-offset-12 ">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> تذكرنى
                    </label>
                </div>
            </div>
          </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
              <button type="submit" class="banner_btn">
                  تسجيل دخول
              </button>

                <a class="banner_btn" href="{{ route('password.request') }}">
                    نسيت كلمة المرور
                </a>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection

@section('footer')

@endsection
