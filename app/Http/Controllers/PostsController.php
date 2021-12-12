<?php

namespace App\Http\Controllers;
use App\Http\Requests\StorePost;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str as Str;

class PostsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function index() {
        $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public

    function create() {
        return view('post.create', ['post' => new Post(),'categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public

    function store(StorePost $request) {
        $post = Post::create([
            'title' => $request['title'],
            'url_clean' => Str::slug($request['title']),
            'content' => $request['content'],
            'posted' => $request['posted'],
            'category_id' => $request['category']
        ]);
        $name =  $request->file('file')->store('public');
       $image = Image::UpdateOrCreate([
           'post_id'=> $post->id
        ],[
           'image' => $name
       ]);
        return back()->with('status','Publicacion creada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function show(Post $post) {
        return view('post.show', ['post' =>$post ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function edit(Post $post) {
        return view('post.edit', ['post' =>$post, 'categories'=>Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function update(Request $request, Post $post) {

        $post->update([
            'title' => $request['title'],
            'url_clean' => Str::slug($request['title']),
            'content' => $request['content'],
            'posted' => $request['posted'],
            'category_id' => $request['category']
        ]);

       if($request->file('file')){
        $name =  $request->file('file')->store('public');
        $image = Image::UpdateOrCreate([
            'post_id'=> $post->id
         ],[
            'image' => $name
        ]);
       }


        return redirect()->route('posts.index')->with('status','Publicación actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public

    function destroy(Post $post) {
        $post->delete();
        return redirect()->route('posts.index')->with('status', 'Publicación eliminada con exito');
    }
}
