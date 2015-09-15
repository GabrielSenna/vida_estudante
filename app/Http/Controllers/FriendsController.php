<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Controllers\Controller;

class FriendsController extends Controller
{
    public function index(){
        return view('profile.friends');
    }
    public function addFriend($id){
        Auth::user()->requestFriendship($id);
        return redirect()->back();
    }
    public function acceptFriend($id){
        Auth::user()->acceptFriendshipRequest($id);
        return redirect()->back();
    }
    public function rejectFriend($id){
        Auth::user()->refuseFriendshipRequest($id);
        return redirect()->back();
    }

}
