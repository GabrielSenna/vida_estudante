<?php

namespace VidaEstudante;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
    	'title',
    	'subject',
    	'grade',
    	'file_path',
    	'description',
    	'student_id',
    	'advisor_id',
    ];

    public function student(){
    	return $this->belongsTo('VidaEstudante\User', 'student_id');
    }

    public function advisor(){
    	return $this->belongsTo('VidaEstudante\User', 'advisor_id');
    }

}
