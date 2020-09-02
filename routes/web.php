<?php


//8. Envio de Variables atravez de URL's

Route::view ('/', 'home')->name('home');
Route::view ('/about', 'about')->name('about');
Route::get ('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::view ('/contact', 'contact')->name('contact');


Route::post('contact', 'ControladorMensaje@store');

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