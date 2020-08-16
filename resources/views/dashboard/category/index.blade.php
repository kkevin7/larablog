@extends('layouts.app')

@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table-striped table-inverse ">
            <thead class="thead-inverse bg-success">
                <tr>
                    <th>Title</th>
                    <th>URL Clean</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                    <th colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td scope="row">{{$category->title}}</td>
                    <td>{{$category->url_clean}}</td>
                    <td>{{$category->created_at->format('Y-m-d')}}</td>
                    <td>{{$category->updated_at->format('Y-m-d')}}</td>
                    <td>
                        <a href="{{route('category.show',$category->id)}}" class="btn btn-secondary">Show</a>
                    </td>
                    <td>
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{$category->id}}">Delete </button>
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
                    <h5 class="modal-title" id="deleteModalLabel">Delete category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure that do you want to delete the record?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <form id="formDelete" method="post" action="{{route('category.destroy',0)}}" data-action="{{route('category.destroy',0)}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('dashboard.partials.session-flash-status')
    @include('dashboard.partials.validation-error')

    {{ $categories->links() }}
</div>

@endsection

@section('scripts')
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
@endsection
