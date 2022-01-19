<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FromAdminDashboardProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

            return redirect()->route('profile.show', $user->id);
        }


        $inputImage = time() . '-' . $request->hometown . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $user = User::find($id);
        $user->image = $inputImage;
        $user->gender = $request->input('gender');
        $user->address = $request->input('address');
        $user->hometown = $request->input('hometown');
        $user->save();

        return redirect()->route('profile.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('admindashboard');
    }
}
