<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(){

        $projects=Project::all();

//        return $project;

        return view('projects.index',compact('projects'));


    }
    //
}
