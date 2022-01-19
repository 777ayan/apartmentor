<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Post::latest()->paginate(3);
        return view('front.bloglist', compact('blogs')); 

    }

    public function currentuserblog()
    {
        $blogs = Post::where('user_id', Auth::user()->id)->get();
        return view('front.currentuserblog', compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.createblog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' =>'required|mimes:jpg,png,jpeg,|max:5048',
        ]);

        $inputImage = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $blog = new Post;
        $blog->image = $inputImage;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->author = Auth::user()->email;
        $blog->user_id = Auth::user()->id;
        $blog->slug = rand();

        $blog->save();

        return redirect('blogs');

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog= Post::find($id);
        return view('front.showblog', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Post::find($id);
        return view('front.editblog',compact('blog'));
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
        $this->validate($request,[
            'image' =>'mimes:jpg,png,jpeg,|max:5048',
        ]);

        $image = $request->image;

        if($image==null){
        $blog = Post::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        $blog->save();

        if(Auth::user()->role_id == 3){
            return redirect('userdashboard');}
    
        if(Auth::user()->role_id == 2){
            return redirect('agentdashboard');}
    
        if(Auth::user()->role_id == 1){
            return redirect('admindashboard');}
        }

        $inputImage = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $blog = Post::find($id);
        $blog->image = $inputImage;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');

        $blog->save();

        if(Auth::user()->role_id == 3){
        return redirect('userdashboard');}

        if(Auth::user()->role_id == 2){
            return redirect('agentdashboard');}

        if(Auth::user()->role_id == 1){
            return redirect('admindashboard');}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Post::find($id);
        $blog->delete();

        if(Auth::user()->role_id == 3){
            return redirect('userdashboard');}
    
            if(Auth::user()->role_id == 2){
                return redirect('agentdashboard');}
    }
}
