<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class ProjectsController extends Controller
{
	public function myProjects(){
		return view('profile.projects.my_project');
	}

	public function create(){
		return view('profile.projects.create');
	}
}
