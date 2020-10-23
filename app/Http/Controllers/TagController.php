<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Model;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\tags\TagsFormRequest;
use App\Tag;
class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tags.index')->with('tags', Tag::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagsFormRequest $request)
    {
        Tag::create([
            'name'=>$request->name,

        ]);
        return redirect('/tags')->with('status', 'Tag created sucessfully!');
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
    public function edit(Tag $tag)
    {
        return view('tags/create')->with('tag',$tag);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagsFormRequest $request,Tag $tag)
    {
        $tag->name= $request->name;
        $tag->save();
        return redirect('/tags')->with('status', 'Tag update sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        if ($tag->post->count() > 0){
            return redirect()->back()->with('errors','Not delect because post is parent');
             }
        $tag->delete();
        return redirect('/tags')->with('status', 'Delete  sucessfully!');
    }
}
