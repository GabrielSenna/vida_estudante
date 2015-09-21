<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class ProjectsController extends Controller
{
	public function myProject(){
		return view('profile.my_project');
	}
}
