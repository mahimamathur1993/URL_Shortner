<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (auth()->user()->role == 0) {
            $role="SuperAdmin";
         }else if (auth()->user()->role == 1) {
            $role="SuperAdmin";
         }else if (auth()->user()->role == 2) {
            $role="SuperAdmin";
         }
        return view('pages.dashboard',compact('role'));

    }


    public function genateurl(){

        $users = User::all();
        return view('pages.genrateurl',compact('users'));
    }

    public function genate_url(Request $request){
        $request->validate([
            'original_url' => 'required|url',
        ]);

        $shortCode = Str::random(6);

        while (Url::where('short_url', $shortCode)->exists()) {
            $shortCode = Str::random(6);
        }

        $url = Url::create([
            'user_id' => Auth::id(),
            'original_url' => $request->original_url,
            'short_url' => $shortCode,
            'created_by' => Auth::id(), 
        ]);

        return redirect()->route('genateurl.create')->with('success', 'Short URL created: ' . url('/' . $shortCode));
    }

     public function invite(){

        $users = User::all();
        return view('pages.invite',compact('users'));
    }

    public function invite_user(Request $request){
        
    }
}
