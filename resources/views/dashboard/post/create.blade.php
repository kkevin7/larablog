@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route("post.store")}}" method="post">
        @include('dashboard.post._form')
    </form>

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')
</div>

@endsection
