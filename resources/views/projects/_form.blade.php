@csrf

<div class="form-group">
    <label for="title">Titulo del projecto</label>
    <input class="form-control border-0 bg-light shadow-sm" 
        id="title"
        type="text" 
        name="title" 
        value="{{ old('title', $project->title) }}"> 
</div>

<div class="form-group">
    <label for="url">URL del proyecto</label>
    <input class="form-control border-0 bg-light shadow-sm"
        type="text" 
        name="url" 
        value="{{ old ('url', $project->url) }}"> 
    
</div>

<div class="form-group">
    <label for="description">Descripción del proyecto</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
        name="description" 
        id="description" cols="30" rows="10">{{ old('description', $project->description )}}</textarea>
</div>

<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Regresar</a>