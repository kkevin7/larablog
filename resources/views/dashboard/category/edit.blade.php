@extends('layouts.app')

@section('content')

<div class="container">
    <form action="{{route("category.update",$category->id)}}" method="post">
        @method('put')
        @include('dashboard.category._form')
    </form>

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')
</div>

@endsection
