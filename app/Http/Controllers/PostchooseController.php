<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Postchoose;
use app\model\Postclass;
use app\model\Poststudent;

class PostchooseController extends Controller
{
    //
    public function getfirst(){
        $postchoose = Postchoose::first();
        $choosestudent = $postchoose->Post_student;
        $chooseclass = $postchoose->Post_class;
        echo $chooseclass;
        echo $choosestudent;
    }

}
