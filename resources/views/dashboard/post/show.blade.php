@extends('dashboard.master')

@section('content')

    @include('dashboard.post._form')

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')

@endsection
