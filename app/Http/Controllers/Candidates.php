<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Canditate;

class Candidates extends Controller
{
    //Add candidate
    public function addCandidate(){
        return view('addCandidate');
    }
    //Store image
    public function storeCandidate(Request $request){
        $request->validate([
            'name'                  => 'required',
            'profile_picture'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'details'               => 'required',

        ]);
        $data= new Candidate();
        $data->name = $request->name;
        $data->details = $request->details;
        $file= $request->file('image');

        if($file){
            $filename = $file->getClientOriginalName();
            $file->move(public_path('public/image'), $filename);
            $data->profile_picture = $filename;
            
        }
        $data->save();
        return redirect()->route('home');
       
    }
		//View image
    public function viewCandidate(){
        $candidates = Candidate::all();
        return view('home', compact('candidates'));

    }
}
