<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Requests\ProjectRequest;
use VidaEstudante\Http\Requests\RatingRequest;
use VidaEstudante\Http\Controllers\Controller;
use VidaEstudante\Project;
use VidaEstudante\Rating;
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
		else{
			return redirect()->route('MyStudentsProjects');
		}
			
	}

	public function rateSubmit(RatingRequest $request, Rating $ratingModel, $id){
		if(Auth::user()->projectsFromAdvisor()->find($id)){
			$project = Project::find($id);
			$ratings = $project->ratings->all();
			if($request->approved == true){
				$approved = true;
			}else{
				$approved = false;
			}
			foreach($ratings as $rating){
				if($rating->advisor->id == Auth::user()->id){
					$rating->update(['comment'=>$request->comment,'grade'=>$request->grade, 'approved'=>$approved]);
					return redirect()->route('MyStudentsProjects');
				}
			}
			$ratingModel->comment = $request->comment;
			$ratingModel->grade = $request->grade;
			$ratingModel->approved = $approved;
			$ratingModel->project_id = $project->id;
			$ratingModel->advisor_id = Auth::user()->id;
			$ratingModel->save();
			return redirect()->route('MyStudentsProjects');
		}
		else{
			return redirect()->route('MyStudentsProjects');
		}
	}
}