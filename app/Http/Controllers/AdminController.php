<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index(){

        return view('admin.post_page');
    }


    public function store(Request $request){

        $validator = Validator::make($request->all(),[

            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if($validator->fails()){

            return redirect()->route('admin.index')->withInput()->withErrors($validator);
        }

        $post = new Post;

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->name = Auth::user()->name;
        $post->user_id = Auth::user()->id;
        $post->usertype = Auth::user()->usertype;
        $post->post_status = 'active';

        if($request->has('image')){

            $image = $request->file('image');
            $ext =  $image->getClientOriginalExtension();
            $imageName = time(). '.'. $ext;
            $image->move(public_path('postimage'), $imageName);
    
            $post->image = $imageName;
        }

        $post->save();
        

        return redirect()->route('admin.index')->with('success', 'Post Added Successfully!');
    }


    public function show(){

        $posts = Post::all();

        return view('admin.show', compact('posts'));
    }


    public function edit(Post $post){

        return view('admin.edit_page', compact('post'));
    }


    public function update(Request $request, Post $post){

        
        $validator = Validator::make($request->all(),[

            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image',
        ]);

        if($validator->fails()){

            return redirect()->route('admin.edit', $post->id)->withInput()->withErrors($validator);
        }

        $post->title = $request->input('title');
        $post->description = $request->input('description');
        $post->name = Auth::user()->name;
        $post->user_id = Auth::user()->id;
        $post->usertype = Auth::user()->usertype;
        $post->post_status = 'active';
        $post->save();

        if(!empty($request->file('image'))){

            $oldImage = public_path('postimage/'. $post->image);

            if(is_file($oldImage)){
                unlink($oldImage);
            }

            
            $image = $request->file('image');
            $ext =  $image->getClientOriginalExtension();
            $imageName = time(). '.'. $ext;
            $image->move(public_path('postimage'), $imageName);
            $post->image = $imageName;
            $post->save();
        }
        return redirect()->route('admin.edit', $post->id)->with('success', 'Post Updated Successfully!');
    }


    public function destroy(Post $post){

        $post->delete();

        $oldImg = public_path('postimage/'. $post->image);

        if(is_file($oldImg)){
            unlink($oldImg);
        }

        session()->flash('success', 'Post deleted successfully!');

        return response()->json([

            'status' => true,
        ]);
        
    }
}
