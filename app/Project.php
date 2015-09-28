<?php

namespace VidaEstudante;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'title',
    	'subject',
    	'file_path',
    	'description',
    	'theme',
    ];

    public function students(){
    	return $this->belongsToMany('VidaEstudante\User', 'project_student', 'project_id', 'student_id');
    }

    public function advisors(){
    	return $this->belongsToMany('VidaEstudante\User', 'project_advisor', 'project_id', 'advisor_id');
    }

    public function ratings(){
        return $this->hasMany('VidaEstudante\Rating', 'project_id');
    }
}
