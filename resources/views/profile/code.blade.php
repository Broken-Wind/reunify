@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <div class="display-4 pb-4">

                {{ $user->name }}

            </div>
            <img src="{{ $user->qrUrl }}">
        </div>
    </div>
</div>
@endsection
