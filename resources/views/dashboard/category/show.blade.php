@extends('layouts.app')

@section('content')

<div class="container">
    @include('dashboard.category._form')

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')
</div>

@endsection
