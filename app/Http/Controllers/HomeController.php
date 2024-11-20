<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
    
            if ($usertype == 'user') {

                return view('home.homepage', compact('posts'));

            } 
            
            if ($usertype == 'admin') {

                return view('admin.adminhome');

            } else {

                return redirect()->back();
            }
        } else {

            return view('home.homepage', compact('posts'));
        }
    }
    
    public function homepage(){

        $posts = Post::all();

        return view('home.homepage', compact('posts'));
    }


    public function detail(Post $post){


        return view('home.post_details', compact('post'));
    }


    public function create_post(){

        return view('home.create_post');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
