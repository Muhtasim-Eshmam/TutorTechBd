<?php

namespace App\Http\Controllers;

use App\Tuitions;
use App\tutor;
use App\admin;
use App\scam;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        return view('tutor.tutorpanel');
    }

    public function train()
    {
        return view('tutor.advice');
    }


    public function apply()
    {
        return view('tutor.apply');
    }


    public function tutorstore(Request $request)
     {
        $tutor= new tutor();

        $tutor->name = $request->name;
        $tutor->address = $request->address;
        $tutor->phone = $request->phone;
        $tutor->educate =  $request->educate;
        $tutor->contact = $request->contact;
        $tutor->nid = $request->nid;
        $tutor->code = $request->code;
        $tutor->exp = $request->exp;
       
        $tutor->save();
         return redirect('http://127.0.0.1:8000/applyview');
     }

     public function tutorview(tutor $tutor)
     {
        $tutor=tutor::all();
        return view('tutor.applyview',compact('tutor'));
     }
  

     public function syllabusview(admin $admin , tutor $tutor)
     {
         $admin=admin::all();
         return view('tutor.syllabuscheck',compact('admin'));
     }


     public function scammerview(scam $scam , tutor $tutor)
     {
         $scam=scam::all();
         return view('tutor.scammercheck',compact('scam'));
     }


     public function tuitionshow(Tuitions $tuitions)
     {
         $tuitions=Tuitions::all();
         return view('tutor.tuitioncheck',compact('tuitions'));
     }

     public function search(Request $request,Tuitions $tuitions)
     {

     $tuitions = Tuitions::query()
     ->where('code', 'LIKE', "%{$request->string}%")
     ->orWhere('salary', 'LIKE', "%{$request->string}%")
     ->orWhere('location', 'LIKE', "%{$request->string}%")
     ->paginate(20);
     return view('tutor.tutorsearch', compact('tuitions'));}
     
     }
//      public function showapp(Request $request,Tuitions $tuitions)
//      {
//      $tuitions = Tuitions::query()
//      ->where('contact', 'LIKE', "%{$request->string}%")
//      ->paginate(10);
//  return view('tutor.tutorsearch', compact('tuitions'));}

     
     