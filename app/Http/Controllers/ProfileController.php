<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

use Auth;

class ProfileController extends Controller
{
	public function index(){
		return view('profile.home');
	}    
}
