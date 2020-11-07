<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Tag;
class FontendController extends Controller
{
    public function home(Post $post){
        // $rd = Post::orderBy('id','desc');
        $jobs = Post::orderBy('created_at', 'DESC')->simplePaginate(3);

        return view('fontends.home')
        ->with('categories', Category::all())
        ->with('posts',Post::all())
        ->with('jobs',$jobs)
        
        ;

        
    }

    public function post(Post $post)
    {
        return view('fontends.post')
        ->with('post',$post)
        ->with('categories',Category::all())
        ->with('youmaylike',Post::all());
        
    }

    public function cat(Category $category){
        return view('fontends.cat')
        ->with('category',$category)
        ->with('categories',Category::all())
        ->with('posts', $category->posts()->simplePaginate(1))
        ;
    }
  
 
   

    
}
