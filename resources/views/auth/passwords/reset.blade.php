@extends('layouts.app')
@section('title')
تعيين كلمة مرور جديدة
@endsection

@section('header')

@endsection
@section('content')


<div class="container" style="background-color:#d7e9d1;margin-top:25px;margin-bottom:25px;">
  <div class="contact_bottom"style="direction:rtl;margin-top:10px;" >
    <h3>إعادة تعيين كلمة مرور</h3>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <div class="col-md-8">
                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <label for="email" class="col-md-2 control-label">عنوان البريد</label>
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
            <label for="password" class="col-md-2 control-label">كلمة المرور</label>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">

            <div class="col-md-8">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                @if ($errors->has('password_confirmation'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
            </div>
            <label for="password-confirm" class="col-md-2 control-label">تأكيد كلمة المرور</label>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="banner_btn">
                    إعادة تعيين
                </button>
            </div>
        </div>
    </form>
  </div>
</div>

@endsection

@section('footer')

@endsection
