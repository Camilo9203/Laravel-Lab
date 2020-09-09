<?php
    

//8. Envio de Variables atravez de URL's

Route::view ('/', 'home')->name('home');
Route::view ('/acerca', 'about')->name('about');

Route::resource('portafolio', 'ProjectController')
    ->names('projects')
    ->parameters(['portafolio' => 'project']);

// Las siete rutas REST 
    // Route::get ('/portafolio', 'ProjectController@index')->name('projects.index');
    // Route::get ('/portafolio/crear', 'ProjectController@create')->name('projects.create');
    // Route::get ('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
    // Route::patch ('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
    // Route::post ('/portafolio', 'ProjectController@store')->name('projects.store');
    // Route::get ('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
    // Route::delete ('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
    
Route::post ('contact', 'MessageController@store')-> name('messages.store');
Route::view('/contacto', 'contact')->name('contact');


Auth::routes(['register' => false]);


// Route::view ('projects', 'PortFolioController')->except(['index', 'show']);

    //Route::view('/', 'home')->name('home'); // Politicas de privacidad, terminos y condiciones 

    // Route::get ('/', function(){

    //     $nombre = "Camilo";
    //     return view ('home', compact('nombre')); //Or ['nombre' => $nombre or ->with('nombre', $nombre);

    // })->name('home');



//Video 7 Rutas con Nombre

    // Route::get('Contectenos', function(){

    //     return "Sección de contactos";
    // })->name('Contactos');

    // Route::get("/", function(){

    //     echo "<a href='" . route('Contactos') . "'> Contactos 1 </a><br>";
        
    //     echo "<a href='" . route('Contactos') . "'> Contactos 2 </a><br>";
        
    //     echo "<a href='" . route('Contactos') . "'> Contactos 3 </a><br>";
        
    //     echo "<a href='" . route('Contactos') . "'> Contactos 4 </a><br>";
        
    //     echo "<a href='" . route('Contactos') . "'> Contactos 5 </a><br>";
    // });


//Video 6 Rutas

    // use Illuminate\Support\Facades\Route;

    // //Route::get ('/', function) Pagina de inicio
    // //Pagina/Contacto Route::get ('contacto', funtion) 

    // Route::get('/', function () {
    //     return view('welcome');
    // });

    // Route::get ('contacto', function () {
        
    //     return "Hola desde la pagina de contacto";
    // });



    // Route::get('saludo/{nombre?}', function ($nombre = "Invitado") {

    //     return "Saludos " . $nombre;

    // });

