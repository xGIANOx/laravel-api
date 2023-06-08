@extends('layouts.admin')


@section('content')


<div class="container">

    @include('partials.validation_errors')

    <h5 class="text-uppercase text-muted my-4">Add a new Project</h5> 

     <form action="{{route('admin.projects.store')}}" method="post"> 
        
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Project title here " aria-describedby="titleHelper" value="{{old('title')}}" required>

            @error('title')
            <div class="alert alert-danger" role="alert">
                <strong>title, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Types</label>
            <select class="form-select @error('type_id') is-invalid @enderror" name="type_id" id="type_id">
                <option value="">Select a type</option>
                @foreach ($types as $type)
                <option value="{{$type->id}}" {{ $type->id  == old('type_id', '') ? 'selected' : '' }}>{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <p>Select the technologies</p>
            @foreach ($technologies as $technology)
            <div class="form-check @error('technologies') is-invalid @enderror">
    
                <label class="form-check-label">
                    <input name="technologies[]" type="checkbox" value="{{ $technology->id }}" class="form-check-input" {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                    {{ $technology->name }}
                </label>
            </div>
            @endforeach
    
            @error('technologies')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" id="image" class="form-control @error('image') is-invalid @enderror" placeholder="Image url here " aria-describedby="imageHelper" value="{{old('image')}}">
            
            @error('image')
            <div class="alert alert-danger" role="alert">
                <strong>Image, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text"  name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Project online link here " aria-describedby="linkHelper" value="{{old('link')}}">
            
            @error('link')
            <div class="alert alert-danger" role="alert">
                <strong>link, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Repository Link</label>
            <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="Project Github repo link here" aria-describedby="linkHelper" value="{{old('link')}}">
            
            @error('link')
            <div class="alert alert-danger" role="alert">
                <strong>link, Error: </strong>{{$message}}
            </div>

            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5" placeholder="..." value="{{old('description')}}"></textarea>
        </div>
        @error('description')
        <div class="alert alert-danger" role="alert">
            <strong>Description, Error: </strong>{{$message}}
        </div>

        @enderror

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection