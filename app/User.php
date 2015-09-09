<?php

namespace VidaEstudante;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;
use Auth;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'avatar', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function search($p){
        return User::query('users')
            ->where('name','like', '%'.$p.'%')
            ->orWhere('email','like', '%'.$p.'%')
            ->get(['id', 'name','email', 'avatar']);
    }

    public function getAvatar($id){
        $u = User::find($id);

        if($u->avatar == 'no-img'){
            return asset('img/no-image.png');
        }else{
            return url('images/avatar/'.$id);
        }
    }

    public function friendRequest(){
        return $this->belongsToMany('VidaEstudante\User', 'friendship_solicitations', 'id_requester', 'id_requested');
    }

    public function friendRequested(){
        return $this->belongsToMany('VidaEstudante\User', 'friendship_solicitations', 'id_requested', 'id_requester');
    }

}
