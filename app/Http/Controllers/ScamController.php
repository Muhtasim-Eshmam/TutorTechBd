<?php

namespace App\Http\Controllers;

use App\scam;
use Illuminate\Http\Request;

class ScamController extends Controller
{
    public function scammer()
    {
        return view('admin2.scammeradd');
    }



    public function scammerstore(Request $request)
    {
        $scam= new scam();

        $scam->name = $request->name;
        $scam->address = $request->address;
        $scam->phone = $request->phone;
        $scam->details =  $request->details;
        
       
        $scam->save();
        return back();
    }

    public function scammershow(scam $scam)
    {
        $scam=scam::all();
        return view('admin2.scammerlist',compact('scam'));
    }
  
    public function edit(scam $scam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\scam  $scam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, scam $scam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\scam  $scam
     * @return \Illuminate\Http\Response
     */
    public function destroy(scam $scam)
    {
        //
    }
}
