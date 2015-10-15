<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Requests\ProjectRequest;
use VidaEstudante\Http\Controllers\Controller;
use VidaEstudante\Project;
use File;
use Auth;
use Response;

class ProjectsController extends Controller
{
	public function myProjects(){
		return view('profile.projects.my_project');
	}

	public function create(){
		return view('profile.projects.create');
	}
	public function store(ProjectRequest $request){
		$project = Project::create(['title'=>$request->title, 'description'=>$request->description, 'file_path'=> 'project.pdf', 'theme'=> $request->theme, 'subject'=>$request->subject]);
		$projectFile = $request->file('project_file');
		if($request->students!= null){
			$project->students()->sync($request->students);
			$project->students()->attach(Auth::user()->id);
		}
		else{
			$project->students()->attach(Auth::user()->id);
		}
		$project->advisors()->sync($request->advisors);
		$path = File::makeDirectory(storage_path().'\projects\\'.$project->id, 0777, true, true);
		$projectFile->move(storage_path().'\projects\\'.$project->id, 'project.pdf');
	}

	public function downloadProject($id){
		$file= storage_path().'\projects\\'.$id.'\project.pdf';
        $headers = [
              'Content-Type: application/pdf',
            ];
        return Response::download($file, 'project'.$id.'.pdf', $headers);
	}

	public function myStudentsProjects(){
		return view('profile.projects.advisor_project');
	}

	public function rate($id){
		if(Auth::user()->projectsFromAdvisor()->find($id)){
			$project = Project::find($id);
			return view('profile.projects.rate', compact('project'));
		}
		else 
			return redirect()->route('MyStudentsProjects');
	}
}