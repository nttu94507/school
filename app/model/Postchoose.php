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
        return $this->belongsTo(Poststudent::class,'poststudents_id','id');
        

    }
     public function Post_class(){
        return $this->belongsTo(Postclass::class,'postclasss_id','id');
    
    }
    public function addnew(){
        $sql = "
    }

}
?>

