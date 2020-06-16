<?php
/**
 * Created by PhpStorm.
 * User: PC-191231
 * Date: 15/06/2020
 * Time: 5:55 CH
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'description'=>'required',
            'content'=>'required',
        ]);

        $post = new Post([
            'description' => $request->get('description'),
            'content' => $request->get('content'),
        ]);
        $post->save();
        return redirect('/posts')->with('success', 'Post saved!');
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
     * @param  int  $post_id
     * @return \Illuminate\Http\Response
     */
    public function edit($post_id)
    {
        $post = Post::find($post_id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $post_id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post_id)
    {
        $request->validate([
            'description'=>'required',
            'content'=>'required'
        ]);

        $post = Post::find($post_id);
        $post->description =  $request->get('description');
        $post->content = $request->get('content');
        $post->save();

        return redirect('/posts')->with('success', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted!');
    }
}
