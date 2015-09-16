<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class AdvisorController extends Controller
{
    public function show(){
    	return view('profile.advisor');
    }
}
