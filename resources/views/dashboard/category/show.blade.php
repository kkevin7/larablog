@extends('dashboard.master')

@section('content')

    @include('dashboard.category._form')

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')

@endsection
