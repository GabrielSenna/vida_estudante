<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Requests\SearchRequest;
use VidaEstudante\Http\Controllers\Controller;

use Auth;
use VidaEstudante\User;

class ProfileController extends Controller
{
	public function index(){
		return view('profile.home');
	}

    public function search(SearchRequest $request, User $userModel){
        $p = $request->get('p');
        $users = $userModel->search($p);
        return view('profile.search', compact('users'));

    }
}
