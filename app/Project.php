<?php

namespace App;

use App\Mail\ProjectCreated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Project extends Model
{

    protected $fillable=['title','description','owner_id'];
    //opposite way $guarded
    public function tasks(){

         return $this->hasMany(Task::class);
     }

     public function owner(){

         return $this->belongsTo(User::class);
     }

     
     protected static function boot()
     {

         parent::boot();

         static::created(function($project){
           Mail::to('qiuxan2@gmail.com')->send(
            new ProjectCreated()
        ); 
         });
    }
     public function addTask($task){

         $this->tasks()->create($task);
//       return Task::create([
//           'project_id'=>$this->id,
//           'description'=>$description,
//       ]);

     }
}
