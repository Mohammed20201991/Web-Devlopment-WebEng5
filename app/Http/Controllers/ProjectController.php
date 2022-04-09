<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
   public function index() {

    $projects = [
        [
            'id' => 1,
            'name'=> 'Title1'
        ],
        [
            'id' => 2,
            'name'=> 'Title2'
        ]
        ];
        return view('projects.list',[
            // we have to reffer to the placeholder it is not important to be samw as varible 
            'projects' => $projects]
        );  //it show projects/list.blade.php       
    }

    public function create()
    {

        return view('projects.create'); // I need to show projects/create.blade.php   
    }

    public function store(Request $requsest)
    {
        // dd($requsest->name); // It means   
        // dd($requsest->description);
        // dd($requsest->image_url); 
        // or you can use input there is several choice at this point 
        // dd($requsest->input('image_url')); 
        $valaidated_data = $requsest->validate([
            'name'        => 'required',
            'description' => 'nullable',
            'image_url'   => 'nullable|url'
                            ]);
                            // dd($valaidated_data);
                            // database  insert next time 
        // wrong way because we will submit form again and this side effect 
        // return $this->index();
        return redirect("/projects");  //GET
    }

    // edite same as create 
    // public function edit()
    // {
    //     return view('projects.edit'); // I need to edit projects/edit.blade.php   
    // }

    public function edit() {
        $project = [
            'id' => 1,
            'name' => 'Title1',
            'description' => 'Description1',
            'image_url' => '',
        ];
        return view('projects.list', [
            'project'   => $project
        ]); //projects/edit.blade.php
    }


    public function update(Request $request) {
        $validated_data = $request->validate([
            'name'          => 'required',
            'description'   => 'nullable',
            'image_url'     => 'nullable|url',
        ]);
        // dd($validated_data);
        // Database update
        return redirect('/projects'); // GET
    }
}
