<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\Posts\PostRequestForm;
use App\Http\Requests\Posts\UpdatePostRequest;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('VerifyCategoryCount')->only(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post=Post::all();
        return  view('posts.index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequestForm $request)
    {
//        dd($request->all());
        $image=$request->image->store('posts');
        $post = Post::create([
            
            'name'           =>$request->name,
            'birthday'      =>$request->birthday,
            'birthplace'    =>$request->birthplace,
            'religious'    =>$request->religious,
            'ethnicity'     =>$request->ethnicity,
            'nationality'   =>$request->nationality,
            'professional'    =>$request->professional,
            'gender'           =>$request->gender,
            'profile'       =>$image,
            'who'           =>$request->who,
            'career'        =>$request->career,
            'education'     =>$request->education,
            'personal'     =>$request->personal,
            'about'       =>$request->about,
            'facebook'    =>$request->facebook,
            'instagram'     =>$request->instagram,
            'youtube'     =>$request->youtube,
            'twitter'    =>$request->twitter,
            'linkedin'    =>$request->linkedin,
            'tiktok'     =>$request->tiktok,
            'website'     =>$request->website,
            'published'     =>$request->published,
            'category_id'  =>$request->category_id,

        ]);
        if ($request->tag_id) {
            $post->tag()->attach($request->tag_id);
        }
        return redirect(route('posts.index'))->with('status', 'Creat Post Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
//        dd($post->tag->pluck('name')->toArray());
        return view('posts.create')->with('post',$post)->with('categories', Category::all())->with('tags', Tag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only([
            'name',
            'birthday',
            'birthplace',
            'religious',
            'ethnicity',
            'nationality',
            'professional',
            'gender',
            'who',
            'career',
            'education',
            'personal',
            'about',
            'facebook',
            'youtube',
            'twitter',
            'linkedin',
            'tiktok',
            'website',
            'published',
            'category_id',
            ]);

        if($request->hasFile('image')){

            $image=$request->image->store('posts');
//            Storage::delete($post->profile);
              $post->deleteImage();

            $data['profile']=$image;
        }

        if ($request->tag_id) {
            $post->tag()->sync($request->tag_id);
        }
         $post->update($data);
        return redirect(route('posts.index'))->with('status', 'Update Post Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {


        Storage::delete($post->profile);
        $post->delete();
        return redirect(route('posts.index'))->with('status', 'Delete Post Successfully!');
    }
}
