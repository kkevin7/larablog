@extends('dashboard.master')

@section('content')

<form action="{{route("post.store")}}" method="post">
    @include('dashboard.post._form')
</form>

@include('dashboard.partials.session-flash-status')
@include('dashboard.partials.validation-error')

@endsection
