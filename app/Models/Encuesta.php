<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encuesta extends Model
{
    use HasFactory;
    protected $fillable = ['id_usuario','pregunta1','pregunta3','pregunta4','pregunta5','pregunta6','pregunta7'];
}
