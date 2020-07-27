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
                <th>Category</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th colspan="3" class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts ?? '' as $post)
            <tr>
                <td scope="row">{{$post->title}}</td>
                <td>{{$post->url_clean}}</td>
                <td>{{$post->content}}</td>
                <td>{{$post->posted}}</td>
                <td>{{$post->category->title}}</td>
                <td>{{$post->created_at->format('Y-m-d')}}</td>
                <td>{{$post->updated_at->format('Y-m-d')}}</td>
                <td>
                    <a href="{{route('post.show',$post->id)}}" class="btn btn-secondary">Show</a>
                </td>
                <td>
                    <a href="{{route('post.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$post->id}}">Delete </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Delete Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure that do you want to delete the record?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                <form id="formDelete" method="POST" action="{{route('post.destroy',0)}}" data-action="{{route('post.destroy',0)}}">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        $('#deleteModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var id = button.data('id') // Extract info from data-* attributes
            // var modal = $(this)
            action = $('#formDelete').attr('data-action').slice(0, -1);
            action += id;
            $("#formDelete").attr('action', action);
            // modal.find('.modal-body input').val(recipient)
        });
    }

</script>

@include('dashboard.partials.session-flash-status')
@include('dashboard.partials.validation-error')

{{ $posts ?? ''->links() }}

@endsection
