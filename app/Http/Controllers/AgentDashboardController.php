<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Post;
use App\Models\User;
use Auth;

class AgentDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('agent_id', Auth::user()->email)->latest()->paginate(5);
        $propertiesCount = Property::where('agent_id', Auth::user()->email)->count();
        $blogs = Post::where('user_id', Auth::user()->id)->get();
        $blogsCount = Post::where('user_id', Auth::user()->id)->count();
        return view('front.agentdashboard' ,compact('properties', 'propertiesCount', 'blogs', 'blogsCount'));
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
     * @param  String  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = Property::where('agent_id', $id)->get();
        $propertiesCount = Property::where('agent_id', $id)->count();
        $user = User::where('email',$id)->first();
        return view('front.fromadminagentproperties' ,compact('properties', 'propertiesCount','user'));
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
        //
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
