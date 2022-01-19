@extends('layouts.app')
@section('content')

@include('inc.navbar')
<div class="showproperty" style="text-align: center; background-color:rgba(245,245,245,0.4); border:outset; padding:20px 20px;">
<img src="{{asset('images/' . $property->image)}}" alt="" style="width:500px"><br>
 <h1>{{$property->title}}</h1><br>
Property ID: {{$property->id}}<br>
Agent: {{$property->agent_id}}<br>
Purpose: {{$property->purpose}}<br>
Type: {{$property->type}}<br>
Bedroom: {{$property->bedroom}}<br>
Bathroom: {{$property->bathroom}}<br>
Floor: {{$property->floor_plan}}<br>
City: {{$property->city}}<br>
Address: {{$property->address}}<br>
Description: {{$property->description}}<br>
Price: {{$property->price}}<br>
@if(Auth::guest())
<a href="{{route('login')}}"><button style="width:250px; height:40px; margin:20px 20px;">LOGIN TO MESSAGE AGENT</button></a>
@else
<a href="{{route('message.create')}}"><button style="width:150px; height:30px; margin:20px 20px;">MESSAGE AGENT</button></a>
@endif
</div>

@include('inc.footer')
@endsection