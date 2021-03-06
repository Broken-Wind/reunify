@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row text-center pb-4">

        <div class="col">

            <h4 class="display-4">

                Log in

            </h4>

        </div>

    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">

            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">
                    Log in
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Reset Password') }}
                    </a>
                @endif
        </div>
    </form>

</div>
@endsection
