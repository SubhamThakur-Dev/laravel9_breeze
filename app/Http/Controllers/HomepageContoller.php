<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;

class HomepageContoller extends Controller
{
    public function index()
    {
        $categories = Category::all();        
        $posts  = Posts::when(request('category_id'),function($query)
        {
            $query->where('category_id',request('category_id'));
        })->paginate(4);
        return view('index',compact('categories','posts'));
    }
}
