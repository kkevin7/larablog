@extends('dashboard.master')

@section('content')

<form action="{{route("post.update",$post->id)}}" method="post">
    @method('put')
    @include('dashboard.post._form')
</form>

<form action="{{route("post.image",$post)}}" method="post" enctype="multipart/form-data" class="my-4">
    @csrf
    <div class="row">
        <div class="col">
            <input type="file" class="form-control-file" name="image" id="image" >
        </div>
        <div class="col">
            <button type="submit" class="btn btn-primary">Subir</button>
        </div>
      </div>
</form>

@include('dashboard.partials.session-flash-status')
@include('dashboard.partials.validation-error')

@endsection
