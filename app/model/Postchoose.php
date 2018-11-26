<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Postchoose extends Model
{
    //protected $fillable = []
    //
    public function Post_student(){
        return $this->belongsTo(Poststudent::class,'studentname','poststudent_id');

    }
    public function Post_class(){
        return $this->belongsTo(Postclass::class.'classname','postclass_id');
    }
}

