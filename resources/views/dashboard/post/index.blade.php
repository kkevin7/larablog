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
                <th>Actions</th>
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
                <a href="{{route('post.edit',$post->id)}}" class="btn btn-secondary">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $posts->links() }}
    
@endsection