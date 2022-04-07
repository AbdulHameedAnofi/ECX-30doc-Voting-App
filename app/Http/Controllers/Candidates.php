<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Models\Canditate;
use Illuminate\Support\Facades\DB;

class Candidates extends Controller
{
    //Add all candidates
    public function addCandidate(){
        return view('addCandidate');
    }
    //Store all candidates
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
		//View all candidates
    public function viewCandidate(){
        $candidates = Candidate::all();
        return view('home', compact('candidates'));

    }

    public function voteCandidate(){
        if (isset($_GET['candidate_id'])) {
            DB::table('candidates')->where('id', $_GET['candidate_id'])->increment('votes', 1);
            return redirect('voted');
        }

    }

    public function getCandidate(){
        if (isset($_GET['candidate_id'])) {
            $candidates = DB::table('candidates')->where('id', $_GET['candidate_id'])->first();
            return view('candidate', compact('candidates'));
        }

    }

    public function leaderBoard(){
        $candidates = DB::table('candidates')->orderBy('votes', 'desc')->get();
        return view('leaderboard', compact('candidates'));
    }
}
