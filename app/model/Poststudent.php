<?php

namespace App\model;
use Postchoose;
use Illuminate\Database\Eloquent\Model;

class Poststudent extends Model
{
    protected $fillable = ['studentname','gender','phone','email'];
    //
    public function post_student(){
        return $this->hasmany(Postchoose::class,'studentname','poststudent_id');
    }
}
