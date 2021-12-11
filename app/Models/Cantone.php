<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantone extends Model
{
    use HasFactory;
    protected $fillable = ['id','canton','id_provincia'];
    
    public function provincia(){
        return $this->belongsTo("App\Provincia");
    }

    public function parroquia(){
        return $this->hasMany("App\Parroquia");
    }
}
