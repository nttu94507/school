<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Postchoose;
use app\model\Postclass;
use app\model\Poststudent;

class PostchooseController extends Controller
{
    
    // public function getfirst(){
    //     $postchoose = Postchoose::first();
    //     $choosestudent = $postchoose->Post_student;
    //     $chooseclass = $postchoose->Post_class;
    //     echo json_encode($chooseclass);
    //     //echo $choosestudent;
    //     $stuname = $choosestudent->studentname;
    //     $date = $postchoose->updated_at;
    //     $claname =$chooseclass->classname;
        
    //     return view('school',$stuname);
    
    
     
    public function getall(){
        $postschoose = Postchoose::all();
        $info = compact($postschoose);
        // return view('school',compact($postschoose));
         echo $info;
        // return view('school',$info);
    }

}
?>