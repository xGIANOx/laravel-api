@extends('layouts.admin')


@section('content')

<div class="container py-5">

    
        <div class="d-flex gap-5">
            <img src="{{$project->img}}" alt="{{$project->title}}" class="single_project_img">
       
        
            <div class=" border rounded p-4 bg-dark text-white">
                <div class="d-flex flex-column">
                    <h1>{{$project->title}}</h1>
                    <div class="bg-white text-black rounded p-5 mt-4">
                        <strong>Description:</strong>    
                        <p class="pt-3">{{$project->description}}</p>

                        <div class="table-responsive">
                            <table class="table table-white">
                                <thead>
                                    <tr>
                                        <th scope="col">Online Link</th>
                                        <th scope="col">Github link</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td scope="row">{{$project->link}}</td>
                                        <td>{{$project->repo_link}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                      
                        
                    </div>
                    <div class="d-flex justify-content-end gap-3 mt-2">
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('admin.projects.index')}}" title="Index" class="text-decoration-none">
                                Back to index
                            </a>
                        </button>
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a class="text-white text-decoration-none" href="{{route('admin.projects.edit', $project->id)}}" title="View" class="text-decoration-none">
                                Edit
                            </a>
                        </button>
                    </div>
                </div>
            </div>

            
        </div>
    
        
   
    

</div>


@endsection