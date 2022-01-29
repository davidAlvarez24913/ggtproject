<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table = 'resultados';
    protected $fillable = ['id_encuesta','ponderacion4','ponderacion5','ponderacion6','ponderacion7'];
    public $timestamps =false;

}
