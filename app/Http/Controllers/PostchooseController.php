<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Postchoose;
use App\model\Postclass;
use App\model\Poststudent;

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
        // $postschoose = Postchoose::all();
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



         

         /****
          * add postclass , poststudent 
          ****/
        //   $poststudents = Poststudent::all();
        //   $postclasses = Postclass::post_class();



        //  'title'=>'選課表',
        //     'view_id'=>$view_id,'view_student'=>$view_student,'view_class'=>$view_class
        // ];

        // $data = [ 'data'=>$postschoose,'poststudents'=>$poststudents,'postclasses'=>$postclasses];//'postschoose'=>$postschoose,
        return view('school');
    }

    public function id(){
        $name = $_POST['studentname'];
        $class = $POSt['classname'];
    }

    public function adddate(Request $request){
        $data = $request->input();
        // echo $data['poststudent_id'];
        // dd($data);
        $postchoose = new Postchoose();
        $postchoose->poststudents_id = $data['poststudent_id'];
        $postchoose->postclasss_id =  $data['postclass_id'];
        $postchoose->save();
       
        return redirect("/choose");




        //$data->studentname;


    // echo "id=".$_POST['addid'];
    // echo "name=".$_POST['addname'];
    // echo "class=".$_POST['addclass'];
    }
    public function delete($id){
        $class = Postchoose::where('id',$id)->first();
        $class->delete();
        // echo $id;
        return redirect("/choose");

    }

    public function updateForm($id){
        $chose = Postchoose::find($id);
        $poststudents = Poststudent::all();
        $postclasses = Postclass::all();
        
        $selelist = ['chose'=>$chose,'stucho'=>$poststudents,'clacho'=>$postclasses];

        return view('school_old',$selelist);
        
    }

    public function update(Request $request) {
        $data = $request->input();
        $id = $data['id'];
        $chose = Postchoose::find($id);
        $chose->poststudents_id = $data['poststudent_id'];
        $chose->postclasss_id =  $data['postclass_id'];
        $chose->save();
        return redirect("/choose");
    }

    public function addnewstu(Request $request) {
        $stuinfo = $request->input();
        dd($stuinfo);
        $newstu = new Poststudent;
        $newstu->studentname = $stuinfo['stuname'];
        $newstu->gender = $stuinfo['stugen'];
        $newstu->phone = $stuinfo['stupho'];
        $newstu->email = $stuinfo['stuema'];
        $newstu->save();

        return redirect("/choose");
    }
    public function addnewcla(Request $request) {
        $clainfo = $request->input();
        // dd($clainfo);
        $newcla = new Postclass;
        $newcla->classname = $clainfo['claname'];
        $newcla->classtime = $clainfo['clatime'];
        $newcla->classaddress = $clainfo['claaddress'];
        $newcla->save();

        return redirect("/choose");
    }

}
?>