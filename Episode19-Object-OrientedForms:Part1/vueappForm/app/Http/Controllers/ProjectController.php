<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProject;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->get();
        return view('create',compact('projects'));
    }

    public function store(StoreProject $request)
    {
        Project::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
        return ['message'=>'project created'];
    }
}
