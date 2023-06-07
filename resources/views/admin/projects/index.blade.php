@extends('layouts.admin')


@section('content')
<h1>All projects</h1>
<a class="btn btn-dark" href="{{route('admin.projects.create')}}" role="button">Add a new Project</a>

{{-- @include('partials.session_message') --}}

<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">

            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Description</th>
                <th>Link</th>
                <th>Repo Link</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">


            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td><img height="100" src="{{$project->img}}" alt="{{$project->title}}"></td>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->link}}</td>
                <td>{{$project->repo_link}}</td>
                {{-- <td>{{$post->slug}}</td> --}}
                <td height='280' class="d-flex flex-column justify-content-center">

                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a class="text-white text-decoration-none" href="{{route('admin.projects.show', $project->id)}}" title="View" class="text-decoration-none">
                            View
                        </a>
                    </button>
                    

                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <a class="text-white text-decoration-none" href="{{route('admin.projects.edit', $project->id )}}" title="Edit" class="text-decoration-none">
                            Edit
                        </a>
                    </button>
                    
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#modal-{{$project->id}}">
                            Delete
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="modal-{{$project->id}}" tabindex="-1" aria-labelledby="modal-{{$project->id}}" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal-{{$project->title}}">Are you sure you want to delete {{$project->title}}?</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                The action is permanet!
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">DELETE</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>


                </td>

            </tr>
            @empty
            <tr class="table-primary">
                <td scope="row">No projects yet.</td>

            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>








@endsection