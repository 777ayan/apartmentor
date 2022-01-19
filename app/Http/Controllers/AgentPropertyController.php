<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Auth;

class AgentPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = Property::where('agent_id', Auth::user()->email)->get();
        return view('front.agentproperties', compact('properties'));
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
        $property = Property::find($id);
        return view('front.editproperty', compact('property'));
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
            $property = Property::find($id);
            $property->title = $request->input('title');
            $property->purpose = $request->input('purpose');
            $property->type = $request->input('type');
            $property->bedroom = $request->input('bedroom');
            $property->bathroom = $request->input('bathroom');
            $property->floor_plan = $request->input('floor_plan');
            $property->city = $request->input('city');
            $property->address = $request->input('address');
            $property->description = $request->input('description');
            $property->price = $request->input('price');
    
            $property->save();
            return redirect('agentproperty');
        }

        $inputImage = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $property = Property::find($id);
        $property->image = $inputImage;
        $property->title = $request->input('title');
        $property->purpose = $request->input('purpose');
        $property->type = $request->input('type');
        $property->bedroom = $request->input('bedroom');
        $property->bathroom = $request->input('bathroom');
        $property->floor_plan = $request->input('floor_plan');
        $property->city = $request->input('city');
        $property->address = $request->input('address');
        $property->description = $request->input('description');
        $property->price = $request->input('price');

        $property->save();

        return redirect('agentproperty');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $property = Property::find($id);
        $property->delete();

        return redirect('agentdashboard');
    }
}
