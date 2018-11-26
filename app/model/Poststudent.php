<?php

namespace App\model;
use Postchoose;
use Illuminate\Database\Eloquent\Model;

class Poststudent extends Model
{
    protected $fillable = ['studentname','gender','phone','email'];
    //
    public function post_choose(){
        return $this->hasmany(Postchoose::class,'poststudent_id','studentname');
    }
}
