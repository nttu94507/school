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
        //$info = compact($postschoose);
        // return view('school',compact($postschoose));

        // $class_info = [];

        // $i = 0;
        // foreach( $postschoose as $item )  {
        //     $class_info[$i] = $item;
        //     $class_info[$i]['student'] = $item->Post_student;
        //     $class_info[$i]['classinfo'] = $item->Post_class;
        //     $i++;
        // }

        // foreach( $postschoose as $item) {
        //     $view_id = $item->id;
        //     $view_student = $item->poststudents_id;
        //     $view_class = $item->postclasss_id;
        //     $view =['view_id'=>$view_id,'view_student'=>$view_student,'view_class'=>$view_class];
        // }

         //cho $postschoose;
         $data = [ 'data'=>$postschoose];//'postschoose'=>$postschoose,
        //  'title'=>'選課表',
        //     'view_id'=>$view_id,'view_student'=>$view_student,'view_class'=>$view_class
        // ];
        
        return view('school',$data);
    }

    public function id(){
        $name = $_POST['studentname'];
        $class = $POSt['classname'];
    }

    public function adddate(Request $request){
        $data = $request->input();
        //$data->studentname;

dd($data);
    // echo "id=".$_POST['addid'];
    // echo "name=".$_POST['addname'];
    // echo "class=".$_POST['addclass'];
    }
    public function delete($id){
        $class = Postchoose::where('id',$id)->first();
        $class->delete();

    }
}
?>