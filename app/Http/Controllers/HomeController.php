<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
    	return view('welcome');
    }
}
