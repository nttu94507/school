<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use Poststuedent;
use Postsclass;

class Postchoose extends Model
{
    //protected $fillable = []
    //
    public function Post_student(){
        return $this->belongsTo(Poststudent::class,'poststudent_id','studentname');
        

    }
    public function Post_class(){
        return $this->belongsTo(Postsclass::class,'postclass_id','classname');
    }

}
?>

