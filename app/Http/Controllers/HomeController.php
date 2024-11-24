<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('post_status', 'active')
        ->latest()
        ->paginate(6);
        
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

        $posts = Post::where('post_status', 'active')->get();
        
        return view('home.homepage', compact('posts'));
    }


    public function detail(Post $post){


        return view('home.post_details', compact('post'));
    }


    public function create_post(){

        return view('home.create_post');
    }


    public function user_post(Request $request){

       $validator = Validator::make($request->all(), [

            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image',
       ]);

       if($validator->fails()){

            return redirect()->route('home.create_post')->withInput()->withErrors($validator);
       }

       $post = new Post;

       $post -> title = $request->input('title');
       $post -> description = $request->input('description');
       $post->name = Auth::user()->name;
       $post->user_id = Auth::user()->id;
       $post->post_status = 'pending';
       $post->usertype = Auth::user()->usertype;

       
       if($request->has('image')){

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.'. $ext;
            $image->move(public_path('postimage'), $imageName);

            $post->image = $imageName;

       }

       $post->save();
       

       return redirect()->route('home.create_post')->with('success', 'You have Added the data Successfully!');

    }


    public function my_post(){

        $posts = Post::where('user_id', Auth::user()->id)
        ->latest()
        ->paginate(6);

        return view('home.my_post', compact('posts'));
    }


    public function my_post_del(Post $post){

        $post->delete();

        $oldImage = public_path('postimage/'. $post->image);

        if(is_file($oldImage)){
            unlink($oldImage);
        }

        return response()->json([

            'status' => true,
            'message' => 'Post deleted successfully!'
        ]);
    }


    public function post_update_page(Post $post){

        return view('home.post_page',compact('post'));
    }


    public function update_post_data(Request $request, Post $post){

        $validator = Validator::make($request->all(), [

            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image',
       ]);

       if($validator->fails()){

            return redirect()->route('home.create_post')->withInput()->withErrors($validator);
       }


       $post -> title = $request->input('title');
       $post -> description = $request->input('description');


       if(!empty($request->file('image'))){

        $oldImage = public_path('postimage/'. $post->image);

        if(is_file($oldImage)){
            unlink($oldImage);
        }

       }

       
       if($request->has('image')){

            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $imageName = time(). '.'. $ext;
            $image->move(public_path('postimage'), $imageName);

            $post->image = $imageName;

       }

       $post->save();


       return redirect()->route('home.post_update_page', $post->id)->with('success', 'Post Updated Successfully!');
    }


    public function about(){

        return view('home.about_page');
    }


    public function blog(){

        return view('home.blog_page');
    }



    public function contact(){

        return view('home.contact_page');
    }



    public function service(){

        return view('home.service_page');
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/home');
    }
}
