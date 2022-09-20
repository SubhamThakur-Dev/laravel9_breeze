<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('Category')->paginate(5);
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('posts.create',compact('categories'));
    }

    public function store(PostRequest $request)
    {
        $file       = $request->file('image'); 
        $UploadPath = 'images/posts';
        $uploaded   = $file->move($UploadPath,$file->getClientOriginalName()); 
        $fileName   = $uploaded->getFileName();
        Post::create([
            'title'       => $request->input('title'),
            'description' => $request->input('description'),
            'category_id' => $request->input('category_id'),
            'image'       => $fileName
        ]);
        return redirect()->route('posts.index')->with(session()->flash('create', 'Post Create Successfully'));
    }

    public function show(Post $post)
    {
        return view('post',compact('post'));
    }

    public function edit(post $post)
    {
        
        $categories = Category::all();
        return view('posts.edit',compact('post','categories'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        if($request->hasFile('image'))
        {   
            $file       = $request->file('image'); 
            $UploadPath = 'images/posts';
            $uploaded   = $file->move($UploadPath,$file->getClientOriginalName()); 
            $fileName   = $uploaded->getFileName();
            $post->update([
                'title'       => $request->input('title'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id'),
                'image'       => $fileName
            ]);   
        }
        else
        {
            $post->update([
                'title'       => $request->input('title'),
                'description' => $request->input('description'),
                'category_id' => $request->input('category_id')
            ]);
        }
        return redirect()->route('posts.index')->with(session()->flash('update', 'Post Update Successfully'));;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with(session()->flash('delete', 'Post Delete Successfully'));
    }
}
