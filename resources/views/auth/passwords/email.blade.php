@extends('layouts.app')
@section('title')
إسترجاع كلمة المرور
@endsection

@section('header')

@endsection
@section('content')



<div class="container" style="background-color:#d7e9d1;margin-top:25px;margin-bottom:25px;">
  <div class="contact_bottom"style="direction:rtl;margin-top:10px;" >
    <h3>إسترجاع كلمة المرور</h3>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


            <div class="col-md-8">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <label for="email" class="col-md-2 control-label">عنوان البريد</label>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="banner_btn">
                    إرسال رابط إستعادة كلمة المرور
                </button>
            </div>
        </div>
    </form>
  </div>
</div>


@endsection

@section('footer')

@endsection
