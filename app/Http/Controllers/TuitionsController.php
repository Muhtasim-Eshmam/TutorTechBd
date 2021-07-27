<?php

namespace App\Http\Controllers;

use App\Tuitions;
use Illuminate\Http\Request;

class TuitionsController extends Controller
{
   
    public function create()
    {
        return view('admin2.tuition.add');
    }


    public function studentpanel()
    {
        return view('student.studentpanel');
    }

   

    public function store(Request $request)
    {
        
        $tuitions= new tuitions();

        $tuitions->code = $request->code;
        $tuitions->bckgrnd = $request->bckgrnd;
        $tuitions->contact = $request->contact;
        $tuitions->school = $request->school;
        $tuitions->location = $request->location;
        $tuitions->class =  $request->class;
        $tuitions->subject =  $request->subject;
        $tuitions->salary =  $request->salary;
        $tuitions->time =  $request->time;
        $tuitions->save();
        return back();
    }

    public function show(Tuitions $tuitions)
    {
        $tuitions=Tuitions::all();
        return view('admin2.tuition.view',compact('tuitions'));
    }

   
    public function edit(Tuitions $tuitions, $id)
    {
        $tuitions=Tuitions::find($id);
        return view('admin2.tuition.update',compact('tuitions'));
    }

    public function update(Request $request, Tuitions $tuitions, $id)
    {
        $tuitions=Tuitions::find($id);
        $tuitions->code = $request->code;
        $tuitions->bckgrnd = $request->bckgrnd;
        $tuitions->contact = $request->contact;
        $tuitions->school = $request->school;
        $tuitions->location = $request->location;
        $tuitions->class =  $request->class;
        $tuitions->subject =  $request->subject;
        $tuitions->salary =  $request->salary;
        $tuitions->time =  $request->time;
        $tuitions->save();
        return back();
    }

  
    public function destroy(Tuitions $tuitions,$id)
    {
        $tuitions=Tuitions::find($id);
        $tuitions->delete();
        return back();
    }



    public function search()
    {
        return view('student.mytuitions');
    }

    public function mytuitions(Request $request,Tuitions $tuitions)
    {

    $tuitions = Tuitions::query()
    ->where('code', 'LIKE', "%{$request->string}%")
    ->orWhere('salary', 'LIKE', "%{$request->string}%")

    ->paginate(20);
    return view('student.mytuitionlist', compact('tuitions'));
    }
    
    }



