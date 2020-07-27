@extends('dashboard.master')

@section('content')

<div class="table-responsive">
    <table class="table table-striped table-inverse ">
        <thead class="thead-inverse bg-success">
            <tr>
                <th>Title</th>
                <th>URL Clean</th>
                <th>Content</th>
                <th>Posted</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th colspan="3" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td scope="row">{{$post->title}}</td>
                <td>{{$post->url_clean}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->posted}}</td>
                <td>{{$post->created_at->format('Y-m-d')}}</td>
                <td>{{$post->updated_at->format('Y-m-d')}}</td>
                <td>
                    <a href="{{route('post.show',$post->id)}}" class="btn btn-secondary">Show</a>
                </td>
                <td>
                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form method="POST" action="{{route('post.destroy',$post->id)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('dashboard.partials.session-flash-status')
@include('dashboard.partials.validation-error')

{{ $posts->links() }}

@endsection
