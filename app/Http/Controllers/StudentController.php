<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

use Auth;

class StudentController extends Controller
{
    public function show(){
    	return view('profile.students');
    }

    public function add($id){
    	Auth::user()->addStudent($id);
    	return redirect()->back();
    }
}
