@extends('admin.layouts.base')

@section('contents')
<div class="container">
    <h1>Add new technologies</h1>

    

    <form method="POST" action="{{ route('admin.technologies.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="technology" class="form-label">technology</label>
            
            <select class="form-select @error('technology') is-invalid @enderror" 
            aria-label="Default select example"
            id="technology"
            name="technology"
            value="{{ old('technology')}}">
                <option selected>Open this select technology</option>
            @foreach ($technologies as $technology)
                <option value="{{$technology->id}}">{{$technology->technology}}</option>
            @endforeach
            </select>
        </div>
        
        <button class="btn btn-primary">Save</button>
    </form>
</div>

@endsection