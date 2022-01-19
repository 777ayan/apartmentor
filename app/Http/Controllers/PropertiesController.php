<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Message;
use Auth;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $properties = Property::paginate(3);
        $propertiesCount = Property::all()->count();

        return view('front.properties', compact('properties', 'propertiesCount')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.createproperty');
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
            'purpose' => 'required',
            'type' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'floor_plan' => 'required',
            'city' => 'required',
            'address' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' =>'required|mimes:jpg,png,jpeg,|max:5048',

        ]);

        $inputImage = time() . '-' . $request->title . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $inputImage);

        $property = new Property;
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
        $property->slug = rand();
        $property->agent_id = Auth::user()->email;

        $property->save();

        return redirect('property');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::find($id);
        return view('front.showproperty', compact('property'));
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
