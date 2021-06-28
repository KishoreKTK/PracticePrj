<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tblstate;
use App\Mail\WelcomeMail;
use Mail;

class Samplecontroller extends Controller
{
    public function index()
    {
        $city_det   = Tblstate::all();
        return view('BasicCrud.crud')->with('city_det',$city_det);
    }

    public function storestate(Request $request){
        // dd(request()->all());
        $input = $request->all();
        Tblstate::create($input);
        Mail::to('kishore.kuwy@gmail.com')->send(new WelcomeMail);
        return back()->with('success','Successfully registered a new State!');
    }

    public function edit($id){
        $update_id = Tblstate::find($id);
        return view('BasicCrud.update')->with('update_id',$update_id);
    }

    public function updatepost($id, Request $request){
        $update_form = Tblstate::find($id);
        $update_form->update($request->all());
        return redirect()->action([Samplecontroller::class, 'index'])
                        ->with('success','Updated Successfully');
    }

    public function deletestate($id){
        Tblstate::find($id)->delete();
        return back()->with('success','Deleted Successfully...!!!!');
    }
}
