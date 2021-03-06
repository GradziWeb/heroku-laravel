<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Tag;

class Work extends Model
{
    use HasFactory;
    
    //Mise en place des liens des tables par laravel
    public function clients(){
        return $this->belongsTo(Client::class,'client_id');
    }
    public function tags(){
    return $this->belongsToMany(Tag::class,'work_has_tags');
    }
    
}
