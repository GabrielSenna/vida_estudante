<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Requests\ProjectRequest;
use VidaEstudante\Http\Controllers\Controller;
use VidaEstudante\Project;
use File;

class ProjectsController extends Controller
{
	public function myProjects(){
		return view('profile.projects.my_project');
	}

	public function create(){
		return view('profile.projects.create');
	}
	public function store(ProjectRequest $request){
		$project = Project::create(['title'=>$request->title, 'description'=>$request->description, 'file_path'=> 'none', 'theme'=> $request->theme, 'subject'=>$request->subject]);
		$projectFile = $request->file('project_file');
		$path = File::makeDirectory(storage_path().'\projects\\'.$project->id, 0777, true, true);
		$projectFile->save(storage_path().'\projects\\'.$project->id);
		$project->file_path = $projectFile;
		$project->save();
	}
}