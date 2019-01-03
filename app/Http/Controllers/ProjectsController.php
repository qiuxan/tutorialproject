<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Events\ProjectCreated;


class ProjectsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

       // $projects=auth()->user()->projects;
//        $projects=Project::all();
        //$projects=Project::where('owner_id',auth()->id())->get();
//        dump($projects);

//        cache()->rememberForever('stats',function (){
//
//           return ['lessons'=>123, 'hour'=>60];
//        });

        //$stats=cache()->get('stats');

//        dump($stats);
//        return $project;

//        return view('projects.index',compact('projects'));
        return view('projects.index',[
            'projects'=>auth()->user()->projects,
        ]);


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
        // dd(auth()->id());
        $attribute=['owner_id'=>auth()->id()]+$this->validateProject();
//        dd($attribute);
        $project=Project::create($attribute);
        event(new ProjectCreated($project));
        return redirect('/projects');
    }


//    public function edit($id){
//
////        return $id;:
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

        $this->authorize('update',$project);

//        $attribute=request()->validate([
//
//
//                'title'=>['required','min:3','max:255'],
//                'description'=>['required','min:3'],
//
//
//            ]);

        $project->update($this->validateProject());
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

        $this->authorize('update',$project);

//        $project=Project::findOrFail($id);

        $project->delete();

        return redirect('/projects');

    }

//      public function show($id){
//
//        $project=Project::find($id);
//        return view('projects/show',compact('project'));
//    }

    public function show(Project $project){

        $this->authorize('update',$project);

//        dump($project);

//        abort_if(auth()->id()!==$project->owner_id,403);



//        $project=Project::find($id);
        return view('projects/show',compact('project'));
    }


//    public function show(Filesystem $file){
//
//        dd($file);
////        $project=Project::find($id);
//        return view('projects/show',compact('project'));
//    }
//

    protected function validateProject(){

        return request()->validate([


            'title'=>['required','min:3','max:255'],
            'description'=>['required','min:3'],


        ]);
    }


}
