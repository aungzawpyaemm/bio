<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;
use App\Tag;
class FontendController extends Controller
{
    public function home(){
        $rd = Post::orderBy('id','desc');
       
      
        return view('fontends.home')
        ->with('categories', Category::all())
        ->with('posts',Post::all())
        ->with('items',$rd->get())
        // ->with('list',$list->get())
        
        ;
    }

    // public function category(Category $category){
    //     return view('fontends.category')
    //     ->with('category', $category)
    //     ->with('posts', $category->posts()->simplePaginate(2))
    //     ->with('categories', Category::all())
    //    ;

    // }

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
