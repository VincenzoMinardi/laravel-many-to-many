@extends('admin.layouts.base')

@section('contents')

    <div class="container">
        <h1>Edit Type</h1>
        <form method="POST" action="{{ route('admin.types.update', ['type' => $type]) }}" novalidate>
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input
                    type="text"
                    class="form-control @error('type') is-invalid @enderror"
                    id="type"
                    name="type"
                    value="{{ old('type',$type->type) }}"
                >
                 @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="collabs" class="form-label">Collabs</label>
                <input
                    type="text"
                    class="form-control @error('collabs') is-invalid @enderror"
                    id="collabs"
                    name="collabs"
                    value="{{ old('collabs',$type->collabs) }}"
                >
                 @error('collabs')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        
            <button class="btn btn-primary">Save</button>
        </form>
    </div>

@endsection