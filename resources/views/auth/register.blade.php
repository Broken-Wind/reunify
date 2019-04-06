@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center pb-4">
        <div class="col-md-12">

            <h4 class="display-4">

                Create your Landing Page

            </h4>

        </div>

    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Full Name" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <hr />


                <h5 class="display-5 text-center">

                    Optional:

                </h5>

                <div class="form-group">
                    <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="Phone Number">

                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <input id="linkedin" type="linkedin" class="form-control{{ $errors->has('linkedin') ? ' is-invalid' : '' }}" name="linkedin" value="{{ old('linkedin') }}" placeholder="LinkedIn">

                    @if ($errors->has('linkedin'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('linkedin') }}</strong>
                        </span>
                    @endif
                </div>



                <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Create Landing Page
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
