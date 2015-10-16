<?php

namespace VidaEstudante;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
    	'project_id',
    	'advisor_id',
    	'grade',
    	'comment',
    	'approved',
    ];

    public function project(){
    	return $this->belongsTo('VidaEstudante\Project', 'project_id');
    }

    public function advisor(){
    	return $this->belongsTo('VidaEstudante\User', 'advisor_id');
    }

    public function getApproved(){
        if($this->approved == true){
            return "Aprovado";
        }else{
            return "Insuficiente";
        }
    }
}
