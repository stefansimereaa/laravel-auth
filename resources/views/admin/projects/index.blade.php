@extends('layouts.app')

@section('content')
    <x-admin.projects.header title="Projects Manager" />


    <div class="d-flex align-items-center justify-content-between gap-4">
        {{-- SEARCHBAR --}}
        <form class="input-group">
            <button class="input-group-text">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="search" class="form-control" placeholder="Search..." name="search" />
        </form>
        <div style="min-width: 200px">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-primary ">Create a new Project</a>
        </div>
    </div>

    <section id="projects" class="my-5 d-flex flex-column h-full flex-grow-1 ">
        @if (count($projects))
            <table class="table flex-grow-1 ">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th scope="row">{{ $project->id }}</th>
                            <td>{{ $project->name }}</td>
                            <td>{{ substr($project->description, 0, 20) }}...</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                            <td>
                                <div class="d-flex gap-1 justify-content-end ">
                                    {{-- show button --}}
                                    <a class="btn btn-primary" href="{{ route('admin.projects.show', $project) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    {{-- edit button --}}
                                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    {{-- delete button --}}
                                    <x-admin.projects.delete-project :project="$project" compact />
                                </div>
                            </td>
                        </tr>
                    @endforeach
            </table>
            <div>
                @if ($projects->hasPages())
                    {{ $projects->links() }}
                @endif
            </div>
        @else
            <x-app-alert type="info" message="No Projects Found"></x-app-alert>
        @endif
    </section>
@endsection
