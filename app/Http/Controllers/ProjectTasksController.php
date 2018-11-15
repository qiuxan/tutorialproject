<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Project;

class ProjectTasksController extends Controller
{
    //

    public function update(Task $task){

//        dd(request()->all());

        $task->update([

            'completed'=>request()->has('completed'),
        ]);

        return back();
    }

    public function store(Project $project){

        $attributes=request()->validate(['description'=>'required']);

        $project->addTask($attributes);


//        Task::create([
//
//            'project_id'=>$project->id,
//            'description'=>request('description'),
//        ]);

        return back();
    }
}
