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
}
