<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    
    protected $table = 'projects';

    //Sin protección
    protected $guarded = [];
    
    //Campos denegados a la asignación masiva 
        // protected $guarded = ['id', 'approved', 'create_at', 'updated_at'];

    //Campos de asignación masiva 
        // protected $fillable = ['title', 'url', 'description'];

    //Cambio de Url
    public function getRouteKeyName() 
    {
        return 'url';
    }
    
}
