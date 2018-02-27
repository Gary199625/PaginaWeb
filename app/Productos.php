<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table='productos';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable = [
        'user_id','calegoria_id','title','description','pricing','img','estado',
    ];


}
