<?php

namespace App\Http\Controllers;

use App\Models\Student_Projects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class stuent_project extends Controller
{
    public function saveall(Request $request){
        
        $stProject= new Student_Projects;

        $stProject->stname = $request->input('name');
        $stProject->email = $request->input('email');
        $stProject->number = $request->input('contact_no');
        $stProject->date = $request->input('date');
        $stProject->projec_name = $request->input('project_name');
        
        if($request->hasfile('project_img') && $request->hasfile('profile_img')){

        $file = $request->file('project_img');
        $file2 = $request->file('profile_img');

        $extension = $file->getClientOriginalExtension();
        $extension2 = $file2->getClientOriginalExtension();

        $filename = time().'.'.$extension;
        $filename2 = time().'.'.$extension2;

        $file->move('projects_img/',$filename);
        $file2->move('profiles_img/',$filename2);

        $stProject->profile_image = $filename2;
        $stProject->project_image = $filename;

        $stProject->save();  

        return redirect()->back()->with('status' , 'Student Project Added Successfully!!');
        }

        else{ 
        return redirect()->back()->with('badstatus' , 'Oops!! Something Went Wrong.');
        }
        
        
    }

    public function editall($id){
      $std = Student_Projects::find($id);

     return view('editProject', compact('std'));

    }

    public function updateall(Request $request , $id){

        $student = Student_Projects::find($id);
        $student->stname = $request->input('name');
        $student->email = $request->input('email');
        $student->number = $request->input('contact_no');
        $student->date = $request->input('date');
        $student->projec_name = $request->input('project_name');
        
        if($request->hasfile('project_img') && $request->hasfile('profile_img')){
             
         $destination = 'profiles_img/'.$student->profile_image;
         $destination2 = 'projects_img/'.$student->projct_image;
         
         if(File::exists($destination)){
             File::delete($destination);
             if(File::exists($destination2)){
             File::delete($destination2); 
             }
         }



        $file = $request->file('project_img');
        $file2 = $request->file('profile_img');

        $extension = $file->getClientOriginalExtension();
        $extension2 = $file2->getClientOriginalExtension();

        $filename = time().'.'.$extension;
        $filename2 = time().'.'.$extension2;

        $file->move('projects_img/',$filename);
        $file2->move('profiles_img/',$filename2);

        $student->profile_image = $filename2;
        $student->project_image = $filename;

        $student->update();  

        return redirect()->back()->with('status' , 'Student Project Updated Successfully!!');
        }

        else{ 
        return redirect()->back()->with('badstatus' , 'Oops!! Something Went Wrong.');
        }




    }
}
