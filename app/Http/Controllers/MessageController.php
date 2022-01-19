<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\User;
use App\Models\Message;
Use Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $messages = Message::where('agent_id', Auth::user()->email)->latest()->get();
        $messagesCount = Message::where('agent_id', Auth::user()->email)->count();
        return view('front.inbox', compact('messages', 'messagesCount'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $agents = User::where('role_id', 2)->get();
        $properties = Property::all();
        return view('front.sendmessage', compact('agents', 'properties'));
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
            'property_id' => 'required',
            'agent_id' => 'required',
            'name' =>'required',
            'message' => 'required'
        ]);

        $message = new Message;
        $message->property_id = $request->input('property_id');
        $message->agent_id = $request->input('agent_id');
        $message->user_id = Auth::user()->email;
        $message->name = $request->input('name');
        $message->message = $request->input('message');

        $message->save();

        return redirect('message');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id);
        return view('front.showmessage', compact('message'));
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
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'

        ]);

        $agent = User::where('id', $id)->first();
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->phone = $request->input('phone');
        $message->message = $request->input('message');
        $message->agent_id = $agent->id;
        $message->user_id = Auth::user()->id;
        $message->property_id = $request->input('property_id');

        $message->save();

        return redirect('property');
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
