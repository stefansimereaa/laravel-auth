@extends('layouts.app')

@section('content')
    <x-admin.projects.header :title="$project->name" has-back-button />

    <section>
        <div class="row row-cols-md-">
            <div class="col">

                {{-- GITHUB URL --}}
                @isset($project->github_url)
                    <div><strong>Github url: </strong><a href={{ $project->github_url }}>{{ $project->github_url }}</a>
                    </div>
                @endisset
                {{-- URL --}}
                @isset($project->url)
                    <div><strong>Website url: </strong><a href={{ $project->url }}>{{ $project->url }}</a></div>
                @endisset

                <div class="my-2"><strong>Project Description:</strong></div>
                <p class="text-justify">
                    {{ $project->description }}
                </p>

            </div>
            <div class="col d-flex flex-column justify-content-between">
                <figure style="height: 600px" class="bg-dark-subtle ">
                    <img src="{{ $project->thumbnail }}" alt="thumbnail" class="block object-fit-cover" />
                </figure>
                <div class="d-flex gap-2 justify-content-end ">
                    <a class="btn btn-warning" href="{{ route('admin.projects.edit', $project) }}">
                        <i class="fa-solid fa-pen me-2"></i>
                        <span>Modifica</span>
                    </a>
                    <x-admin.projects.delete-project :project="$project" />
                </div>
            </div>
    </section>
@endsection
