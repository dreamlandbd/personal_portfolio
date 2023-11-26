<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('pages.home');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function about(){
        return view('pages.about');
    }
    public function projects(){
        $projects = Project::all();
        return view('pages.projects',compact('projects'));
    }
}
