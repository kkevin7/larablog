@extends('dashboard.master')

@section('content')

<form action="{{route("post.update",$post->id)}}" method="post">
    @method('put')
    @include('dashboard.post._form')
</form>

@include('dashboard.partials.session-flash-status')
@include('dashboard.partials.validation-error')

@endsection
