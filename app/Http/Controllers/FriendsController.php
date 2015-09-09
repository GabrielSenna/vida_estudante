<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class FriendsController extends Controller
{
    public function index(){
        return view('profile.friends');
    }
}
