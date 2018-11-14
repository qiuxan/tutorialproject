<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable=['title','description'];
    //opposite way $guarded

     public function tasks(){

         return $this->hasMany(Task::class);
     }
}
