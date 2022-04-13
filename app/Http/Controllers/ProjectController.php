<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Requests\ProjectFormRrequest;

class ProjectController extends Controller
{
   public function index() {

    $projects = Project::all();
    // $projects = [
    //     ['id' => 1, 'name'=> 'Title1' ],
    //     [ 'id' => 2,'name'=> 'Title2' ]];
        return view('projects.list',[      // we have to reffer to the placeholder it is not important to be samw as varible 
            'projects' => $projects,
           ]);                             //it show projects/list.blade.php       
    }

    public function show(Project $project) 
    {
        // dd($project->tracks);
        // $project = Project::find($id);
        return view('projects.show', ['project'  => $project]); // projects/show.blade.php
    }


    public function create()
    { 
        return view('projects.create'); // I need to show projects/create.blade.php   
    }

    public function store(ProjectFormRrequest $request )
    {
        // dd($requsest->name); // It means   
        // dd($requsest->description);
        // dd($requsest->image_url); 
        // or you can use input there is several choice at this point 
        // dd($requsest->input('image_url')); 

        // $validated_data = $request->validate([// we deleted because the validation come before this point from ProjectFormRequest
        //     'name'        => 'required',
        //     'description' => 'nullable',
        //     'image_url'   => 'nullable|url']);
                            // dd($validated_data);
                            // database  insert next time 
        // wrong way because we will submit form again and this side effect 
        // return $this->index();
        Project::create($request-> validated());
        return redirect()->route('projects.index');  //GET
    }

    // edite same as create 
    // public function edit()
    // {
    //     return view('projects.edit'); // I need to edit projects/edit.blade.php   
    // }

    public function edit(Project $project) {
        // dd($id);
        // $project = Project::find($id); we can type annotate and remove selection 
        // $project = [
        //     'id' => 1,
        //     'name' => 'Title1',
        //     'description' => 'Description1',
        //     'image_url' => '',
        // ];
        return view('projects.edit', ['project'=> $project]); //projects/edit.blade.php
    }
    public function update(ProjectFormRrequest $project , Request $request) {
        // $validated_data = $request->validate([  // we ommite because already validated 
        //     'name'          => 'required',
        //     'description'   => 'nullable',
        //     'image_url'     => 'nullable|url',
        // ]);
        // dd($validated_data);
        // Database update
        // Project::create($validated_data);

        // $project = Project::find($id);
        $project->update($request->validated());
        return redirect('/projects'); // GET
    }

    public function destroy(Project $project) {
        // $project = Project::find($id);
        $project->delete();
        return redirect('/projects');
    }
}
