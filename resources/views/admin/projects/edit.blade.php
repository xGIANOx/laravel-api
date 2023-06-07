@extends('layouts.admin')


@section('content')


<div class="container">
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h5 class="text-uppercase text-muted my-4">Edit {{$project->title}} project</h5>
    
    <form action="{{route('admin.projects.update', $project->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Insert project title" aria-describedby="nameHelper" value="{{old('title', $project->title)}}" required>
        </div>
        @error('title')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="type_id" class="form-label">Types</label>
            <select class="form-select @error('type_id') is-invalid @enderror" name=" type_id" id="type_id">
                <option value="">Select a type</option>
                @foreach ($types as $type)
                <option value="{{$type->id}}" {{ $type->id  == old('type_id', $project->type->id) ? 'selected' : '' }}>{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="text" name="img" id="img" class="form-control @error('img') is-invalid @enderror" placeholder="project image here " aria-describedby="imageHelper" value="{{old('img', $project->img)}}" required>
        </div>
        @error('img')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" name="link" id="link" class="form-control @error('link') is-invalid @enderror" placeholder="project image here " aria-describedby="imageHelper" value="{{old('link', $project->link)}}" required>
        </div>
        @error('link')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="repo_link" class="form-label">Repository link</label>
            <input type="text" name="repo_link" id="repo_link" class="form-control @error('repo_link') is-invalid @enderror" placeholder="project repo_link" aria-describedby="descriptionHelper" value="{{old('repo_link', $project->repo_link)}}" required>
        </div>
        @error('repo_link')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Comic image here " aria-describedby="imageHelper" value="{{old('description', $project->description)}}" required></input>
        </div>
        @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Warning! Error:</strong>{{$message}}
            </div>
        @enderror

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection