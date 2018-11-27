<?php

namespace App\model;
use Postchoose;
use Illuminate\Database\Eloquent\Model;

class Postclass extends Model
{
    
    protected $fillable = ['classname','classtime','classaddress'];
    //
    public function post_class(){
        return $this->hasmany(Postschoose::class,'classname','postclass_id');
    }
}
