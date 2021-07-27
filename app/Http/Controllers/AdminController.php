<?php

namespace App\Http\Controllers;

use App\admin;
use App\tutor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin2.adminpanel');
    }

    public function login()
    {
        return view('admin2.adminlogin');
    }
    public function adminchck (Request $request)
    { 
        $key = $request->input('key');
        $loc = $request->input('loc');
        // dd($request->input('key'));
        $viewFilePath='';
        if($key=='admin101' && $loc=='rakib' || $key=='reset' && $loc=='reset' ) 
        { 
         $viewFilePath='admin2/adminpanel';
         
        }
        else
        {
           
        $viewFilePath='welcome';
        
        
       
        }
        
        // Toastr::success('Successful', 'Admin', ["positionname" => "toast-top-right"]);
         return view($viewFilePath);
    
       
    }

    public function syllabus()
    {
        return view('admin2.syllabusadd');
    }



    public function syllabusstore(Request $request)
    {
        $admin= new admin();

        $admin->class = $request->class;
        $admin->subject = $request->subject;
        $admin->bookname = $request->bookname;
        $admin->syllabus =  $request->syllabus;
        $admin->school =  $request->school;
       
        $admin->save();
        return redirect('http://127.0.0.1:8000/showsyllabus');
    }

    public function syllabusshow(admin $admin)
    {
        $admin=admin::all();
        return view('admin2.syllabusview',compact('admin'));
    }

    public function applications(admin $admin, tutor $tutor)
    {
        $tutor=tutor::all();
        return view('admin2.applications',compact('tutor'));
    }
    
   
}
