<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Property;
use Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = User::whereEmail(Auth::user()->email)->first();
        return view('front.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $userBlogs = Post::where('user_id', $id)->count();
        return view('front.profile', compact('user', 'userBlogs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('front.editprofile', compact('user'));
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
            'image' =>'mimes:jpg,png,jpeg,|max:10048',
        ]);

        $image = $request->image;

        if($image==null){
            $user = User::find($id);
            $user->gender = $request->input('gender');
            $user->address = $request->input('address');
            $user->hometown = $request->input('hometown');
            $user->save();

            return redirect('profile');
        }


        $inputImage = time() . '-' . $request->hometown . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $user = User::find($id);
        $user->image = $inputImage;
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->hometown = $request->input('hometown');
        $user->save();

        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
