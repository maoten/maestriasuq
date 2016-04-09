<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = "documentos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'file','mime','size','propuesta_id'
    ];
    
    public function propuesta(){
       return $this->belongsTo('App\Propuesta');
   }
    
}