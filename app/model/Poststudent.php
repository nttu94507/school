<?php

namespace App\model;
use Postchoose;
use Illuminate\Database\Eloquent\Model;

class Poststudent extends Model
{
    protected $fillable = ['studentname','gender','phone','email'];
    //
    public function post_choose(){
        return $this->hasMany(Postchoose::class,'poststudents_id','id');
    }
}
