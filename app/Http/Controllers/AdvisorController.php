<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

use Auth;

class AdvisorController extends Controller
{
    public function show(){
    	$user = Auth::user()->advisor;
    	return view('profile.advisor', compact('user'));
    }
}
