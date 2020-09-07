@csrf
<label>
    Titulo del projecto <br>
    <input type="text" name="title" value="{{ old('title', $project->title) }}"> 
</label><br>

<label>
    URL del proyecto <br>
    <input type="text" name="url" value="{{ old ('url', $project->url) }}"> 
</label><br>
<label>
    Descripción del proyecto <br>
    <textarea name="description" id="" cols="30" rows="10">{{ old('description', $project->description )}}</textarea>
</label><br>
<button>{{ $btnText }}</button>