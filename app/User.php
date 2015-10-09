<?php

namespace VidaEstudante;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
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
    protected $fillable = [
        'name',
        'occupation',
        'email',
        'avatar',
        'password',
     ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function search($p){
        return User::query('users')
            ->where('id','<>', Auth::user()->id)
            ->where(function ($query) use($p){
                $query->where('name','like', '%'.$p.'%')
                    ->orWhere('email','like', '%'.$p.'%');
            })
            ->get(['id', 'name','email', 'avatar']);
    }

    public function myAvatar(){
        if($this->avatar == 'no-img'){
            return asset('img/no-image.png');
        }else{
            return url('images/avatar/'.$id);
        }
    }

    public function getAvatar(){
        

        if($this->avatar == 'no-img'){
            return asset('img/no-image.png');
        }else{
            return url('images/avatar/'.$this->id);
        }
    }


    //REQUEST FRIEND RELATIONSHIP

    public function friendRequest(){
        return $this->belongsToMany('VidaEstudante\User', 'friendships', 'user_id', 'friend_id')
            ->wherePivot('accepted', false);
    }

    public function friendRequested(){
        return $this->belongsToMany('VidaEstudante\User', 'friendships', 'friend_id', 'user_id')
            ->wherePivot('accepted', false);
    }

    public function requestFriendship($id){
        if($this->id != $id && !$this->isFriend($id)){
            return $this->friendRequest()->attach($id);
        }

    }

    public function refuseFriendshipRequest($id){
        return $this->friendRequested()->detach($id);
    }

    public function acceptFriendshipRequest($id){
        return $this->friendRequested()->sync([$id =>['accepted'=>true]], false);
    }

    public function friendsIAccepted(){
         return $this->belongsToMany('VidaEstudante\User', 'friendships', 'friend_id', 'user_id')
            ->wherePivot('accepted', true);
    }

    public function friendsAcceptedMe(){
        return $this->belongsToMany('VidaEstudante\User', 'friendships', 'user_id', 'friend_id')
            ->wherePivot('accepted', true);
    }

    public function myFriends(){
        return $this->friendsIAccepted->merge($this->friendsAcceptedMe);
    }

    public function isFriend($id){
        if(count($this->friendRequest()->find($id)) || count($this->friendRequested()->find($id)) || count($this->myFriends()->find($id))){
            return true;
        }
        return false;
    }

    public function pendingFriend($id){
        if(count($this->friendRequest()->find($id))){
            return true;
        }
        return false;
    }


    public function advisors(){

        foreach($this->projectsFromStudent as $project){
            $advisors[] = $project->advisors;
        }
        if(isset($advisors)){
            return Collection::make($advisors);
        }
        else{
            return new Collection;
        }
    }

    public function students(){
        foreach($this->projectsFromAdvisor as $project){
            $students[] = $project->students;
        }
        if(isset($students)){
            return Collection::make($students);
        }
        else{
            return new Collection;
        }
    }

    public function isStudent($id){
        if($this->students() != null){
            if(count($this->students()->keyBy($id))){
                return true;
            }
        }
        return false;
    }

    public function isAdvisor($id){
        if(count($this->advisor()->keyBy($id))){
            return true;
        }
        return false;
    }

    public function projectsFromStudent(){
        return $this->belongsToMany('VidaEstudante\Project', 'project_student', 'student_id');
    }
    
    public function projectsFromAdvisor(){
        return $this->belongsToMany('VidaEstudante\Project', 'project_advisor', 'advisor_id');
    }

    public function ratings(){
        return $this->hasMany('VidaEstudante\Rating', 'advisor_id');
    }
}
