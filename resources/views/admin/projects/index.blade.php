@extends('layouts.admin')


@section('content')
<h1>All projects</h1>
<a class="btn btn-dark" href="{{route('admin.projects.create')}}" role="button">Add a new project</a>

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
                <td>

                    VIEW/EDIT/DELETE

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