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

     public function addTask($task){

         $this->tasks()->create($task);
//       return Task::create([
//           'project_id'=>$this->id,
//           'description'=>$description,
//       ]);

     }
}
