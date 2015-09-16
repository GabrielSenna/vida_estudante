<?php

namespace VidaEstudante\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Storage;
use Intervention\Image\Facades\Image;
use VidaEstudante\Http\Requests;
use VidaEstudante\Http\Requests\SearchRequest;
use VidaEstudante\Http\Requests\AvatarRequest;
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

    public function edit(){
        return view('profile.edit');
    }

    public function editAvatar(AvatarRequest $request){
        //dd($request->file('image-content'));
        $image = $request->file('image-content');
        $imageAvatar = Image::make($image);
        if($imageAvatar->width() > 300){
            $imageAvatar->fit(250);
        }

        $user = Auth::user();
        $user->avatar = $request->get('image-field');
        $user->save();
        $file = File::makeDirectory(storage_path().'\users\\'.$user->id, 0777, true, true);
        $imageAvatar->save(storage_path().'\users\\'.$user->id.'\\'.'avatar.jpg');
        return redirect()->route('profile.edit');
    }

    public function removeAvatar(){
        $user = Auth::user();
        if (file_exists(storage_path().'\users\\'.Auth::user()->id.'\avatar.jpg'))
        {
            // excluir o arquivo
            File::delete(storage_path().'\users\\'.Auth::user()->id.'\avatar.jpg');

        }

        $user->avatar = 'no-img';
        $user->save();
        return redirect('edit');
    }
}
