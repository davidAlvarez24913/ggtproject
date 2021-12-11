<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    protected $fillable =['id','parroquia','id_canton'];

    public function cantone(){
        return $this->belongsTo('App\Cantone');
    }
}
