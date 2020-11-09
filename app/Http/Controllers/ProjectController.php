<?php

namespace App\Http\Controllers;

// use DB;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the proyectos.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');   
    }
    public function index()
    {
        
        //$projects = Project::latest()->paginate();
        //obtener datos desde el modelo y la tabla project.
        return view('projects.index', [

            'projects' => Project::latest()->paginate()
            

        ]);
    }

    public function show(Project $project)
    {

        
        //Retornar proyecto por ID
            //   $project = Project::findOrFail($id);

        $project = $project;

        return view('projects.show', [
            
            'project' => $project
        
        ]);

    }

    public function create()
    {
        
 
        return view('projects.create', [
            
            'project' => new Project
        ]);


    }
    
    public function store (SaveProjectRequest $request){

        //Validad datos del formulario
            // $fields = request()->validate([

            //     'title' => 'required',
            //     'url' => 'required',
            //     'description' => 'required'
            // ]);


        //Devuelve todo los campos del modelos
            //Project::create(request()->all());
        //Devuvlve solo los campos dentro de Only
            //Project::create(request()->only('title', 'url', 'description'));
        
        //Envia datos validados
        Project::create($request->validated());

        // Variables del modelo project    
        // return Project::create([

        //     'title' => request('title'),
        //     'url' => request('url'),
        //     'description' => request('description')
        // ]);
        
        //Reedireciona a la ruta index luego de la creación del proyecto.
        return redirect()->route('projects.index')->with('status', 'Tu proyecto fue creado con exito');
    }

    public function edit (Project $project)
    {
        return view('projects.edit', [
            
            
            'project' => $project
        
        ]);
    }
   
    public function update(Project $project, SaveProjectRequest $request)
    {
        
        $project->update ($request->validated());
        return redirect()->route('projects.show', $project)->with('status', 'Tu proyecto fue actualizado con exito');
    }

    public function destroy(Project $project)
    {
        $project->delete();        
        return redirect()->route('projects.index')->with('status', 'Tu proyecto fue destruido con exito');
    }
}
