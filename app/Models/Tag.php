<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Work;

class Tag extends Model
{
    use HasFactory;
    /*
    //Mise en place des liens des tables par laravel
    public function works(){
        return $this->belongsToMany(Work::class,'work_has_tags');
    }
    */
}
