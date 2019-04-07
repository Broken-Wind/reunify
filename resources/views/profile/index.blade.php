@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h4 class="display-4">

                {{ $user->name }}

            </h4>
            <br />
            <h5 class="display-5">

                <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                <br /><br />
                <a href="tel:{{ $user->phone }}">{{ $user->phone }}</a>
                <br /><br />
                <a href="{{ $user->linkedin}}">{{ $user->linkedin}}</a>
                <br /><br />
                <a href="{{ $user->fb}}">{{ $user->fb}}</a>
                <br /><br />
                <a href="{{ $user->instagram}}">{{ $user->instagram}}</a>

            </h5>
        </div>
    </div>
</div>
@endsection
