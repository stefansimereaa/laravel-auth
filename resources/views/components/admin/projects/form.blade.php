<div class="row row-cols-md-2" x-data="{
    thumbnail: '{{ old('thumbnail', $project->thumbnail) }}'
}">
    <div class="col">

        <form class="needs-validation" novalidate method="POST" action={{ route($action, $project) }}>
            @csrf
            @method($method)

            {{-- NAME --}}
            <div class="mb-2">
                <label for="name" class="form-label">Project Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    name="name" value="{{ old('name', $project->name) }}" required>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- thumbnail --}}
            <div class="mb-2">
                <label for="thumbnail" class="form-label">Project thumbnail</label>
                <input type="text" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail"
                    name="thumbnail" value="{{ old('thumbnail', $project->thumbnail) }}" x-model="thumbnail">
                @error('thumbnail')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- URL --}}
            <div class="mb-2">
                <label for="url" class="form-label">Project url</label>
                <input type="text" class="form-control @error('url') is-invalid @enderror" id="url"
                    name="url" value="{{ old('url', $project->url) }}">
                @error('url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- URL --}}
            <div class="mb-2">
                <label for="github_url" class="form-label">Github Url</label>
                <input type="text" class="form-control @error('github_url') is-invalid @enderror" id="github_url"
                    name="github_url" value="{{ old('github_url', $project->github_url) }}">
                @error('github_url')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-2">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <hr class="my-3">


            <div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
    <div class="col">
        <img :src="thumbnail || 'https://i1.wp.com/potafiori.com/wp-content/uploads/2020/04/placeholder.png?ssl=1'"
            alt="thumbnail preview" class="img-fluid w-100" />
    </div>
</div>
</div>
