@extends('layouts.app')

@section('content')

@include('inc.navbar')
<div style="text-align: center; display:flex; justify-content:center; margin-bottom:50px;">
<table class="agentpropertytable" style="border-collapse: collapse;
margin: 25px 0;
font-size: 0.9em;
font-family: sans-serif;
min-width: 400px;
box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);">
    <thead>
        <tr style="background-color: #009879;
        color: #ffffff;
        text-align: left;">
            <th style="padding: 12px 15px; text-align:center">Title</th>
            <th style="padding: 12px 15px; text-align:center">Price</th>
            <th style="padding: 12px 15px; text-align:center">Purpose</th>
            <th style="padding: 12px 15px; text-align:center">Type</th>
            <th style="padding: 12px 15px; text-align:center">City</th>
            <th style="padding: 12px 15px; text-align:center">Address</th>
        </tr>
    </thead>
    <tbody>
    @foreach($properties as $property)
    <tr>
    <td style="padding: 12px 15px; text-align:center">{{$property->title}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$property->price}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$property->purpose}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$property->type}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$property->city}}</td>
    <td style="padding: 12px 15px; text-align:center">{{$property->address}}</td>
    <td><a href="{{ route('property.show', $property->id) }}"><button style="margin:20px; width:200px; height:40px; text-align:center;">Show</button></a></td>

    </tr>
    @endforeach
    </tbody>
</table>
</div>
@include('inc.footer')
@endsection