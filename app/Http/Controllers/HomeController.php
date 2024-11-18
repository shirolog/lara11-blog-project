<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(Auth::id()){

            $posts = Post::all();

            $usertype = Auth::user()->usertype;

            if($usertype == 'user'){

                return view('home.homepage', compact('posts'));

            }elseif($usertype == 'admin'){


                return view('admin.adminhome');

            }else{
                
                return redirect()->back();
            }

        }
    }



    public function homepage(){

        $posts = Post::all();

        return view('home.homepage', compact('posts'));
    }
}
