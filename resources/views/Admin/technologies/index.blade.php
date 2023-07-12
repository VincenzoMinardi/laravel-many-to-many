@extends('admin.layouts.base')

@section('contents')
<div class="container">
    @if (session('delete_success'))
        @php $technology = session('delete_success') @endphp
        <div class="alert alert-danger">
            The technology "{{ $technology->technology }}" has been deleted forever
        </div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Technology</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->technology }}</td>
                    <td>
                        <div class="d-flex justify-content-start">
                            <a class="btn btn-primary me-2" href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}">View</a>
                            <a class="btn btn-warning me-2" href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}">Edit</a>
                            <button type="button" class="js-delete btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $technology->id }}">Delete</button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-warning" href="{{ route('admin.technologies.create', ['technology' => $technology->id]) }}">New technology</a>
    
   
    
</div>
@endsection


