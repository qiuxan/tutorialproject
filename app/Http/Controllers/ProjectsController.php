<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(){

        $projects=Project::all();

//        return $project;

        return view('projects.index',compact('projects'));


    }

    public function create(){

        return view('projects.create');


    }


//    public function store(){
//
//
//
//
////        return request()->all();
//
//        $project=new Project();
//
//        $project->title=request('title');
//        $project->description=request('description');
//
//        $project->save();
//
//        return redirect('/projects');
//
//
//    }


    public function store(){




//        Project::create([
//           'title'=>request('title'),
//            'description'=>request('description'),
//
//        ]);



        Project::create(request()->validate([

            'title'=>['required','min:3','max:255'],
            'description'=>['required','min:3'],


        ]));

        return redirect('/projects');


    }

//    public function edit($id){
//
////        return $id;
//
//        $project=Project::findOrFail($id);
//
//
//        return view('/projects.edit',compact('project'));
//
//
//    }

    public function edit(Project $project){

//        return $id;



        return view('/projects.edit',compact('project'));


    }

//    public function update($id){
////        dd(request()->all());
//        $project=Project::find($id);
//        $project->title=request('title');
//        $project->description= request('description');
//        $project->save();
//
//        return redirect('/projects');
//
//    }

    public function update(Project $project){

        $project->update(request(['title','description']));
//
////        dd(request()->all());
////        $project=Project::find($id);
//        $project->title=request('title');
//        $project->description= request('description');
//        $project->save();

        return redirect('/projects');

    }

    //
//
//    public function destroy($id){
//
//        $project=Project::findOrFail($id);
//
//        $project->delete();
//
//        return redirect('/projects');
//
//    }


    public function destroy(Project $project){

//        $project=Project::findOrFail($id);

        $project->delete();

        return redirect('/projects');

    }

//      public function show($id){
//
//        $project=Project::find($id);
//        return view('projects/show',compact('project'));
//    }

//    public function show(Project $project){
//
////        $project=Project::find($id);
//        return view('projects/show',compact('project'));
//    }


    public function show(Filesystem $file){

        dd($file);
//        $project=Project::find($id);
        return view('projects/show',compact('project'));
    }


}
