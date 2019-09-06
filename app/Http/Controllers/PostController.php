<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index')->with('posts' , Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      

        $this->validate($request , [
            'title'=>'required',
            'avatar'=>'required',
            'content'=>'required',
           
        ]);

         $avatar = $request->avatar;

         $avatar_new_name = time().$avatar->getClientOriginalName();

         $avatar->move('uploads/posts' ,  $avatar_new_name );

         $post = Post::create([
                'title' => $request->title,
                'content' => $request->content,
                'avatar' => 'uploads/posts/' . $avatar_new_name,
                'slug'=>str_slug($request->title),
                
         ]); 

           

            Session::flash('success' , 'Post created successfully');




        return redirect()-> back();

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
    public function edit($id)
    {
        $post=Post::find($id);

        return view('admin.posts.edit')->with('post', $post);
                                       
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $this->validate($request , [
            'title'=>'required',
           
            'content'=>'required',

           
        ]);

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;

            $avatar_new_name = time() . $avatar->getClientOriginalName();

            $avatar->move('uploads/posts' , $avatar_new_name);

            $post->avatar ='uploads/posts/'.$avatar_new_name;
        }

       
            $post->title = $request->title;
            $post->content = $request->content;
           
            
            $post->save();

           

            Session::flash('success' , 'Post updated successfully');




            return redirect()->route('posts');
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
      Session::flash('success' , 'The post has been trashed');

      return redirect()->back();
    }

}
